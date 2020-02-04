<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\About;
use App\Service;
use App\Home;
use App\Review;
use App\Gallery;
use App\Appointment;
use App\Contact;
use App\Team;
use App\Topic;
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
        //fetch customer testimonials
        $testimonials = Review::get();
        $testimonials = json_decode(json_encode($testimonials));
        //fetch gallery photos
        $galleries = Gallery::get();
        $galleries = json_decode(json_encode($galleries));
        return view('frontpages.index')->with(compact('homes','sliders', 'services','galleries','testimonials'));
    }
    public function About(){
        $abouts = About::first();
        $abouts = json_decode(json_encode($abouts));

        //fetch team members
        $teams = Team::get();
        $teams = json_decode(json_encode($teams));
        return view('frontpages.about')->with(compact('abouts', 'teams'));
    }
    public function Services(){

        $services = Service::get();
        $services = json_decode(json_encode($services));
        return view('frontpages.services')->with(compact('services'));
    }
    public function Testimonials(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $reviews = new Review;
            $reviews->name = $data['name'];
            $reviews->textarea = $data['textarea'];
            $reviews->emoji = $data['emoji'];
            $reviews->save();
        }
        $review = Review::get();
        return view('frontpages.testimonials')->with(compact('review'));
    }
    public function Faq(){
        $questions = Topic::get();
        $questions = json_decode(json_encode($questions));
        return view('frontpages.faq')->with(compact('questions'));
    }
    public function Gallery(){
        //fetch gallery photos
        $galleries = Gallery::get();
        $galleries = json_decode(json_encode($galleries));
        return view('frontpages.gallery')->with(compact('galleries'));
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
    public function Appointment(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();

            $appointments = new Appointment;
            $appointments->name = $data['name'];
            $appointments->email = $data['email'];
            $appointments->appointment = $data['appointment'];
            $appointments->date = $data['date'];
            $appointments->save();
        }
        return redirect('/');
    }
    public function Contact(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->all();
            //echo("<pre>");print_r($data);die;

            $contacts = new Contact;
            $contacts->name = $data['name'];
            $contacts->email = $data['email'];
            $contacts->subject = $data['subject'];
            $contacts->textarea = $data['textarea'];
            $contacts->save();

        }
        return view('frontpages.contact-us')->with('success','Thank You for Your Message we will get in touch..');
    }
    public function logout() {
		Session::flush();
		return redirect('/admin')->with('flash_message_success','Logged out Succesfully');
	}
}
