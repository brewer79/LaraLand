<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Portfolio;

class PortfoliosAddController extends Controller
{
    public function execute(Request $request){

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'description' => 'required|max:255',
                'images' => 'required'
            ], $messages);
            if($validator->fails()){
                return redirect()
                    ->route('portfoliosAdd')
                    ->withErrors($validator)
                    ->withInput();
            }

            if($request->hasFile('images')){
                $file = $request->file('images');
                $input['images'] = $file->getClientOriginalName();
                $file->move(public_path().'/assets/img', $input['images']);
            }
            $portfolio = new Portfolio();
            $portfolio->fill($input);
            if($portfolio->save()){
                return redirect('admin')->with('status', 'Информация добавлена');
            }
        }

        if(view()->exists('admin.portfolios_add')){
            $data = [
                'title' => 'Новый блок портфолио'
            ];
            return view('admin.portfolios_add', $data);
        }
        abort(404);
    }
}
