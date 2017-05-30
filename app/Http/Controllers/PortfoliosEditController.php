<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Portfolio;
use Validator;

class PortfoliosEditController extends Controller
{
    public function execute(Portfolio $portfolio, Request $request) {

        if ($request->isMethod('delete')) {

            $portfolio->delete();
            return redirect('admin')->with('status', 'Блок портфолио успешно удалён');
        }

        $messages = [
            'required' => 'Поле :attribute обязательно к заполнению'
        ];

        if ($request->isMethod('post')) {

            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'images' => 'required'
            ], $messages);

            if ($validator->fails()) {
                return redirect()
                    ->route('portfoliosEdit', ['portfolio' => $input['id']])
                    ->withErrors($validator)
                    ->withInput();
            }

            if ($request->hasFile('images')) {
                $file = $request->file('images');
                $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            } else {
                $input['images'] = $input['old_images'];
            }

            unset($input['old_images']);

            $portfolio->fill($input);
            if ($portfolio->update()) {
                return redirect('admin')->with('status', 'Страница обновлена');
            }
        }

        $old = $portfolio->toArray();
        if (view()->exists('admin.portfolios_edit')) {
            $data = [
                'title' => 'Редактирование блока портфолио - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.portfolios_edit', $data);
        }
    }
}
