<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = new Menu();
        $menu->titulo= "Inicio";
        $menu->padre_id = null;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Programas Académicos";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "C.E.I";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Admisiones";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Financiación";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Estudiantes";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Egresados";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "ED. Continuada";
        $menu->padre_id = 1;
        $menu->save();

        $menu = new Menu();
        $menu->titulo= "Contacto";
        $menu->padre_id = 1;
        $menu->save();
    }
}
