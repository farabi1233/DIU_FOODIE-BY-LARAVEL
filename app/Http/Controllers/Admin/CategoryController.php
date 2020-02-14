<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        $data = [
 
            'categories' => Category::all()
        ];
        return view('admin.dashboard.view.view_category')->with($data);

        
        
    }

    public function create()
    {
        return view('admin.dashboard.add.add_category');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
  
        Category::create($request->all());
        return redirect()->route('category.create')
                        ->with('success','Blog created successfully.');
    }

    public function show($id)
    {
        
    }
   
    public function edit($id)
    {
        
    }
    
    public function update(Request $request, $id)
    {
        
    }
   
    public function destroy($id)
    {
        
    }
}
