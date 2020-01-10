<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class AdminController extends Controller
{
    public function dashboard()
    {
        $admin = Recipe::all();
        return view('admin.dashboard', ['admin'=>$admin]);
    }

    public function create()
    {
        return view("admin.create");
    }

    public function store(Request $request)
    {

        $admin=new \App\Recipe;
        $admin->name=$request->name;
        $admin->description=$request->description;
        if($request->file('image')){
            $image = $request->file('image')->store('image_post','public');
            $admin->image=$image;
        }
        $admin->time=$request->time;
        $admin->category=$request->category;
        $admin->rating=$request->rating;

        $admin->save();

        return redirect()->route('admin.dashboard');
    }

    public function update(Request $request, $id)
    {

        $admin = Recipe::findOrFail($id);
        $admin->name=$request->name;
        $admin->description=$request->description;
        if($request->file('image')){
            $image = $request->file('image')->store('image_post','public');
            $admin->image=$image;
        }
        $admin->time=$request->time;
        $admin->category=$request->category;
        $admin->rating=$request->rating;

        $admin->save();

        return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        $admin = Recipe::findOrFail($id);
        return view('admin.edit', ['admin'=>$admin]);
    }

    public function destroy($id)
    {
        $admin = Recipe::findOrFail($id);
        $admin->delete();

        return redirect()->route('admin.dashboard');
    }

    public function logo()
    {
        return view("admin.logo");
    }

    
    public function logostore(Request $request)
    {

        $admin=new \App\Recipe;
        if($request->file('image')){
            $logo = $request->file('image')->img('banner','public');
            $admin->image=$logo;
        }

        $admin->save();

        // return redirect()->route('admin.logo');
        //logo.store
        return view("admin.logo");
    }

}
