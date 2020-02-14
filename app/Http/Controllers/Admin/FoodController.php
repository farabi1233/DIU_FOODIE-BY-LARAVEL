<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
use App\Category;
use App\Restaurant;
use App\Meal;

class FoodController extends Controller
{
    
    public function index()
    {
        $data = [
 
            'foods' => Food::all()
        ];
        return view('admin.dashboard.view.view_food')->with($data);
    }

    
    public function create()
    {
        $data['foods'] =  Food::orderBy('id')->get();
        $data['categories'] =  Category::orderBy('id')->get();
        $data['meals'] =  Meal::orderBy('id')->get();
        $data['restaurants'] =  Restaurant::orderBy('id')->get();
        return view('admin.dashboard.add.add_food')->with($data);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'name' => 'required',
            'price' => 'required',
            
            'category_id' => 'required',
            'restaurant_id' => 'required',
            'meal_id' => 'required',
        ]);
        

        Food::create($request->all());
        return redirect()->route('food.create')
            ->with('success', 'Blog created successfully.');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
