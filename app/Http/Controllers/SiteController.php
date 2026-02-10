<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Estate;
use App\Models\Category;
use App\Models\Floor;
use App\Models\Material;
use App\Models\Room;
use App\Models\User;
use App\Models\Car;

class SiteController extends Controller
{
    
    public function index()
    {
        $hous_sale = Estate::where(['category_id' => 1])->where('visible', '1')->limit(6)->get();

        return view('site.index', compact('hous_sale'));
    }

    public function house()
    {   
        $hous_sale = Estate::where('visible', '1')->paginate(6);

        return view('site.house', compact('hous_sale'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $hous_sale = Estate::where(['category_id' => $id])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->paginate(6);

        return view('site.category', compact('hous_sale', 'category'));
    }

    public function floor($id)
    {
        $category = Floor::find($id);
        $hous_sale = Estate::where(['floor_id' => $id])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->paginate(6);

        return view('site.category', compact('hous_sale', 'category'));
    }

    public function material($id)
    {
        $category = Material::find($id);
        $hous_sale = Estate::where(['material_id' => $id])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->paginate(6);

        return view('site.category', compact('hous_sale', 'category'));
    }

    public function room($id)
    {
        $category = Room::find($id);
        $hous_sale = Estate::where(['room_id' => $id])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->paginate(6);

        return view('site.category', compact('hous_sale', 'category'));
    }

    public function user($id)
    {
        $category = User::find($id);
        $hous_sale = Estate::where(['user_id' => $id])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->paginate(6);

        return view('site.category', compact('hous_sale', 'category'));
    }

    public function estate($slug)
    {
        $hous = Estate::where(['slug' => $slug])->where('visible', '1')->with(['category', 'floor', 'material', 'room', 'user'])->first();
        
        return view('site.show', compact('hous'));
    }

    public function about()
    {
        return view('site.about');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function send(Request $request)
    {
        $messageDate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => ['required'],
            'content' => ['required', 'min:3'],
        ]);

        Mail::to('anatosy@mail.ru')->send(new Contact($messageDate));

        return redirect()->back()->with('success', 'Письмо отправленно успешно!');
    }

    public function search(Request $request) {
        $request->validate([
            'q_hous' => ['nullable'],
            'q_car' => ['nullable'],
        ]);

        $search = $request->all();

        if($request->q_hous && $request->q_car){

            $q_hous = $request->input('q_hous');
            $search_house = Estate::where('title', 'LIKE', "%{$q_hous}%")->get();

            $q_car = $request->input('q_car');
            $search_car = Car::where('title', 'LIKE', "%{$q_car}%")->get();

        }elseif($request->q_hous){

            $q_hous = $request->input('q_hous');
            $search_house = Estate::where('title', 'LIKE', "%{$q_hous}%")->get();
            $search_car = array(); 

        }elseif($request->q_car){

            $q_car = $request->input('q_car');
            $search_car = Car::where('title', 'LIKE', "%{$q_car}%")->get();
            $search_house = array();   
        }else{
            $search_car = array();
            $search_house = array(); 
        }
        
        return view('site.search', compact('search_house', 'search_car', 'search'));
    }


}
