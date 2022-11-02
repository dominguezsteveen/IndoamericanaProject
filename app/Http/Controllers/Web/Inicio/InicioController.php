<?php

namespace App\Http\Controllers\Web\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Web\WebImgSlider;
use App\Models\Web\WebMenu;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $menus = WebMenu::where('padre_id',1)->orWhere('padre_id', null)->get();
        //imagenes .webp
        // 5 slides
        $imgs_slider = WebImgSlider::where('show', true)->where('position','!=', null)->take(5)->orderBy('position', 'asc')->get();
        return view('web.welcome', compact('menus', 'imgs_slider'));
    }
}
