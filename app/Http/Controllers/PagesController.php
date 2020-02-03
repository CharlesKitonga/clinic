<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Service;
use App\Home;
use Session;

class PagesController extends Controller
{
    public function Index(){
        //fetch services details
        $services = Service::get();
        $services = json_decode(json_encode($services));
        //fetch slider info
        $sliders = Slider::get();
        $sliders = json_decode(json_encode($sliders));
        //fetch home details
        $homes = Home::first();
        $homes = json_decode(json_encode($homes));
        return view('frontpages.index')->with(compact('homes','sliders', 'services'));
    }
    public function About(){
        $abouts = About::first();
        $abouts = json_decode(json_encode($abouts));
        return view('frontpages.about')->with(compact('abouts'));
    }
    public function Services(){

        $services = Service::get();
        $services = json_decode(json_encode($services));
        return view('frontpages.services')->with(compact('services'));
    }
    public function Testimonials(){
        return view('frontpages.testimonials');
    }
    public function Faq(){
        return view('frontpages.faq');
    }
    public function Gallery(){
        return view('frontpages.gallery');
    }
    public function Treatment(){
        return view('frontpages.treatment-single');
    }
    public function Blogs(){
        return view('frontpages.blog-default');
    }
    public function Blog(){
        return view('frontpages.blog-single');
    }
    public function Contact(){
        return view('frontpages.contact-us');
    }
    public function logout() {
		Session::flush();
		return redirect('/admin')->with('flash_message_success','Logged out Succesfully');
	}
}
