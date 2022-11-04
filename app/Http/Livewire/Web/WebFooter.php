<?php

namespace App\Http\Livewire\Web;

use App\Models\Web\WebNoticia;
use Livewire\Component;

class WebFooter extends Component
{
    public $news;

    public function mount()
    {
        $this->news = WebNoticia::where('show', true)->get();;
    }

    public function render()
    {
        return view('livewire.web.web-footer');
    }
}
