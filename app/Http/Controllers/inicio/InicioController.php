<?php

namespace App\Http\Controllers\inicio;

use App\Http\Controllers\Controller;
use App\Models\ImgSlider;
use App\Models\Menu;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $menus = Menu::where('padre_id',1)->orWhere('padre_id', null)->get();
        $imgs_slider = ImgSlider::where('show', true)->get();
        return view('welcome', compact('menus', 'imgs_slider'));
    }
}
