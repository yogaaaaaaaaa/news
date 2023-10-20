<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.admin.index', [
            'categories'=> Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate ([
            'name'=> 'required|max:255',
            'slug' => 'required',
        ]);

        Category::create($validatedData);

        return redirect('/dashboard/admin')->with('success','New Category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view ('dashboard.admin.edit', [
            'category'=> $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //missing model
        $rules = [
            'name' => 'required|max:15'
        ];

        if($request->slug != $category->slug) {
            $rules['slug'] = 'required';
        }

        $validatedData = $request->validate($rules);

        Category::where('id', $category->id)->update($validatedData);

        return redirect('/dashboard/admin')->with('success','Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //missing model
        
       /*  $category = Category::findOrFail($category->id); */
        $category->delete();
        /* Category::destroy($category->id); */

        return redirect('/dashboard/admin')->with('success','Category has been deleted!');

        
    }
}
