<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class SiteCarController extends Controller
{

    public function index()
    {   
        $cars = Car::where('visible', '1')->paginate(6);

        return view('site.car.index', compact('cars'));
    }

    public function brand($id)
    {   
        $cars = Car::where('brand_id', $id)->where('visible', '1')->with(['brand', 'user'])->get();

        return view('site.car.category', compact('cars'));
    }

    public function year($id)
    {
        $cars = Car::where(['year' => $id])->where('visible', '1')->with(['brand', 'user'])->get();

        return view('site.car.category', compact('cars'));
    }

    public function engine($id)
    {

        switch ($id) {
            case 0:
                $cars = Car::where('engine', '<', 50)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 50:
                $cars = Car::where('engine', '>', 50)->where('engine', '<', 100)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 100:
                $cars = Car::where('engine', '>', 100)->where('engine', '<', 150)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 150:
                $cars = Car::where('engine', '>', 150)->where('engine', '<', 200)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 200:
                $cars = Car::where('engine', '>', 200)->where('engine', '<', 250)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 250:
                $cars = Car::where('engine', '>', 250)->where('engine', '<', 300)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            default:
                $cars = Car::where('engine', '>', 300)->where('visible', '1')->with(['brand', 'user'])->get();
        }

        return view('site.car.category', compact('cars'));
    }

    public function mileage($id)
    {

        switch ($id) {
            case 0:
                $cars = Car::where('mileage', '=', 0)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 100:
                $cars = Car::where('mileage', '>', 0)->where('mileage', '<', 100000)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 300:
                $cars = Car::where('mileage', '>', 100000)->where('mileage', '<', 300000)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 500:
                $cars = Car::where('mileage', '>', 300000)->where('mileage', '<', 500000)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 700:
                $cars = Car::where('mileage', '>', 500000)->where('mileage', '<', 700000)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            case 900:
                $cars = Car::where('mileage', '>', 700000)->where('mileage', '<', 900000)->where('visible', '1')->with(['brand', 'user'])->get();
                break;
            default:
                $cars = Car::where('mileage', '>', 900000)->where('visible', '1')->with(['brand', 'user'])->get();
        }

        return view('site.car.category', compact('cars'));
    }

    public function user($id)
    {
        $category = User::find($id);
        $cars = Car::where(['user_id' => $id])->where('visible', '1')->with(['brand', 'user'])->get();

        return view('site.car.category', compact('cars', 'category'));
    }

    public function show($slug)
    {   
        $car = Car::where('slug', $slug)->where('visible', '1')->with(['brand'])->first();

        return view('site.car.show', compact('car'));
    }

}
