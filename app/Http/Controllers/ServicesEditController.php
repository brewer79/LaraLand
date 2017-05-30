<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;
use Validator;

class ServicesEditController extends Controller
{
    public function execute(Service $service, Request $request) {

        if ($request->isMethod('delete')) {

            $service->delete();
            return redirect('admin')->with('status', 'Сервис успешно удалён');
        }

        $messages = [
            'required' => 'Поле :attribute обязательно к заполнению'
        ];

        if ($request->isMethod('post')) {

            $input = $request->except('_token');
            $validator = Validator::make($input, [
                'name' => 'required|max:255',
                'text' => 'required|max:255',
                'icon' => 'required'
            ], $messages);

            if ($validator->fails()) {
                return redirect()
                    ->route('servicesEdit', ['service' => $input['id']])
                    ->withErrors($validator)
                    ->withInput();
            }

            $service->fill($input);
            if ($service->update()) {
                return redirect('admin')->with('status', 'Страница обновлена');
            }
        }

        $old = $service->toArray();
        if (view()->exists('admin.services_edit')) {
            $data = [
                'title' => 'Редактирование сервиса - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.services_edit', $data);
        }
    }
}
