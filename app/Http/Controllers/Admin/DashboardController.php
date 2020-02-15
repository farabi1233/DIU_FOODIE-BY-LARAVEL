<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Category;
use App\Restaurant;
use App\Meal;


class DashboardController extends Controller
{
    public function index()
    {
        $data['foods'] =  Food::orderBy('id')->get();
        $data['categories'] =  Category::orderBy('id')->get();
        $data['meals'] =  Meal::orderBy('id')->get();
        $data['restaurants'] =  Restaurant::orderBy('id')->get();
        
        return view('admin.dashboard.index')->with($data);
    }
}
