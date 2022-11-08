<?php

namespace App\Http\Livewire\Web;

use App\Models\Web\WebMenu as WebWebMenu;
use Livewire\Component;

class WebMenu extends Component
{
    public $menus;

    public function mount()
    {
        $this->menus = WebWebMenu::where('show', true)->where('padre_id',1)->orWhere('padre_id', null)->get();
    }

    public function render()
    {
        return view('livewire.web.web-menu');
    }
}
