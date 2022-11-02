<?php

namespace Database\Seeders;

use App\Models\ImgSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImgSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/BANNER-UNO2b-1.png";
        $img->urlRedirect = "/";
        $img->save();
        
        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/examenes-practicos-2-01.jpg";
        $img->urlRedirect = "/";
        $img->save();

        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/examenes-practicos-2-fuerzas-01-1.jpg";
        $img->urlRedirect = "/";
        $img->save();
        
        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/Artes-cursos-continuada-06.jpg";
        $img->urlRedirect = "/";
        $img->save();

        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/820x312-CINCO-1.png";
        $img->urlRedirect = "/";
        $img->save();
        
        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/no-se-deje-engañar-03.jpg";
        $img->urlRedirect = "/";
        $img->save();

        $img = new ImgSlider();
        $img->urlImg = "images/inicio/slider/Slide-Ponal-1.jpg";
        $img->urlRedirect = "/";
        $img->save();
    }
}
