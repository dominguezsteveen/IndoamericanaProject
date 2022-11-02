<?php

namespace App\Http\Livewire\Web;

use App\Models\WebPost;
use Livewire\Component;

class WebPostLivewire extends Component
{
    public $open = true;
    
    public function render()
    {
        $posts = WebPost::where('show', true)->where('orden', '!=', null)->orderBy('orden','asc')->get();
        return view('livewire.web.web-post-livewire', compact('posts'));
    }
}
