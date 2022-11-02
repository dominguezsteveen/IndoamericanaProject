<?php

namespace Database\Seeders;

use App\Models\Web\WebImgSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebImgSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/BANNER-UNO2b-1.png";
        $img->urlRedirect = "/";
        $img->position = 1;
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/examenes-practicos-2-01.jpg";
        $img->urlRedirect = "/";
        $img->position = 2;
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/examenes-practicos-2-fuerzas-01-1.jpg";
        $img->urlRedirect = "/";
        $img->position = 3;
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/Artes-cursos-continuada-06.jpg";
        $img->urlRedirect = "/";
        $img->position = 4;
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/820x312-CINCO-1.png";
        $img->urlRedirect = "/";
        $img->position = 5;
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/no-se-deje-engañar-03.jpg";
        $img->urlRedirect = "/";
        $img->save();

        $img = new WebImgSlider();
        $img->urlImg = "images/web/inicio/slider/Slide-Ponal-1.jpg";
        $img->urlRedirect = "/";
        $img->save();
    }
}
