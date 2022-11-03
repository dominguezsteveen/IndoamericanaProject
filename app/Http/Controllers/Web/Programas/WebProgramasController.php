<?php

namespace App\Http\Controllers\Web\Programas;

use App\Http\Controllers\Controller;
use App\Models\Admin\AdminPrograma;
use Illuminate\Http\Request;

class WebProgramasController extends Controller
{
    public function getPrograma($programa)
    {
        $program = AdminPrograma::where('urlRedirect',$programa)->first();
        return view('web.web-programa');
    }
}
