<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();

        return view("allrecipes");
    }

    public function dashboard()
    {
        $admin = Recipe::all();

        return view('resep', ['admin'=>$admin]);
    }

    public function about()
    {
        $admin = Recipe::all();
        
        return view('about', ['admin'=>$admin]);
    }
    
    public function contact()
    {
        $admin = Recipe::all();
        
        return view('contact', ['admin'=>$admin]);
    }
    
    public function resepdetail($id)
    {
        $admin = Recipe::find($id);
        
        return view('resepdetail', ['resep'=>$admin]);
    }
}
