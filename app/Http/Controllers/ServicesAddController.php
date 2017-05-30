<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Service;

class ServicesAddController extends Controller
{
    public function execute(Request $request){

        if($request->isMethod('post')){
            $input = $request->except('_token');

            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению'
            ];

            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required|max:255',
                'icon' => 'required'
            ], $messages);
            if($validator->fails()){
                return redirect()
                    ->route('servicesAdd')
                    ->withErrors($validator)
                    ->withInput();
            }

            $service = new Service();
            $service->fill($input);
            if($service->save()){
                return redirect('admin')->with('status', 'Новый сервис добавлен');
            }
        }

        if(view()->exists('admin.services_add')){
            $data = [
                'title' => 'Новый сервис'
            ];
            return view('admin.services_add', $data);
        }
        abort(404);
    }
}
