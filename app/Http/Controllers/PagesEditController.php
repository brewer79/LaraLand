<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;
use Validator;

class PagesEditController extends Controller
{
    public function execute(Page $page, Request $request){

        /*$page = Page::find($id);*/

        if($request->isMethod('delete')){

            $page->delete();
            return redirect('admin')->with('status', 'Страница успешно удалена');
        }

        $messages = [
            'required' => 'Поле :attribute обязательно к заполнению',
            'unique' => 'Поле :attribute должно быть уникальным'
        ];

        if($request->isMethod('post')){

            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'alias' => 'required|max:255|unique:pages,alias,'.$input['id'],
                'text' => 'required'
            ], $messages);

            if($validator->fails()) {
                return redirect()
                    ->route('pagesEdit', ['page' => $input['id']])
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('images')) {
                $file = $request->file('images');
                $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            }else{
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);

            $page->fill($input);
            if($page->update()){
                return redirect('admin')->with('status', 'Страница обновлена');
            }
        }

        $old = $page->toArray();
        if(view()->exists('admin.pages_edit')){
            $data = [
                'title' => 'Редактирование страницы - '.$old['name'],
                'data' => $old
            ];
            return view('admin.pages_edit', $data);
        }
    }
}
