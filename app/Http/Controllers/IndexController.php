<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;
use App\About;
use App\Portfolio;
use App\Service;
use App\Feature;

use Mail;

use DB;

class IndexController extends Controller
{
    //
    public function execute(Request $request){

        if($request->isMethod('post')){

            $messages = [
                'required'=>'Поле :attribute обязательно к заполнению',
                'email'=>'Поле :attribute должно соответствовать формату адреса email'
                ];
            $this->validate($request, [
                'name'=>'required|max:255',
                'email'=>'required|email',
                'text'=>'required'
                ], $messages);

            $data = $request->all();
            $result = Mail::send('site.email', ['data'=> $data], function($message) use ($data){
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Mr.Brewer')->subject('Question');
            });
            if($result){
                return redirect()->route('home')->with('status', 'Email is send');
            }
            //mail


        }

        $pages = Page::all();
        $about = About::all();
        $portfolios = Portfolio::get(array('name', 'description', 'images'));
        $services = Service::where('id', '<', 20)->get();
        $features = Feature::take(5)->get();

        $menu = array();

        $item = array('title'=>'Home', 'alias'=>'carousel');
        array_push($menu, $item);

        $item = array('title'=>'Features', 'alias'=>'features');
        array_push($menu, $item);

        $item = array('title'=>'About us', 'alias'=>'about-us');
        array_push($menu, $item);

        $item = array('title'=>'Our work', 'alias'=>'our-work');
        array_push($menu, $item);

        $item = array('title'=>'Services', 'alias'=>'services');
        array_push($menu, $item);

        $item = array('title'=>'Contact', 'alias'=>'contact');
        array_push($menu, $item);


        return view('site.index', array(
                                        'menu' => $menu,
                                        'pages' => $pages,
                                        'features' => $features,
                                        'about' => $about,
                                        'portfolios' => $portfolios,
                                        'services' => $services,
                                        ));
    }
}
