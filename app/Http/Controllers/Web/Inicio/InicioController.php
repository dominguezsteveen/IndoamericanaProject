<?php

namespace App\Http\Controllers\Web\Inicio;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPrograma;
use App\Models\Web\WebImgSlider;
use App\Models\Web\WebMenu;
use App\Models\Web\WebSection;
use App\Models\WebPost;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $imgs_slider = WebImgSlider::where('show', true)->where('position','!=', null)->take(5)->orderBy('position', 'asc')->get();
        $programs = AdminPrograma::where('show', true)->where('orden', '!=', null)->orderBy('orden','asc')->get();
        $sections = WebSection::all();
        return view('web.web-index', compact( 'imgs_slider', 'programs', 'sections'));
    }
}
