<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Page;
use App\Slider;
use App\About;
use App\Portfolio;
use App\Service;
use App\Feature;
use App\Filter;

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


        }

        $pages = Page::all();
        $sliders = Slider::all();
        $about = About::all();
        $portfolios = Portfolio::all();
        $services = Service::all();
        $features = Feature::all();
        $filters = Filter::all();

        $menu = array();

        $item = array('title'=>'Home', 'alias'=>'carousel');
        array_push($menu, $item);

        foreach($pages as $page){
            $item = array('title'=>$page->name, 'alias'=>$page->alias);
            array_push($menu, $item);
        }

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
                                        'sliders' => $sliders,
                                        'features' => $features,
                                        'about' => $about,
                                        'portfolios' => $portfolios,
                                        'filters' => $filters,
                                        'services' => $services,
                                        ));
    }
}
