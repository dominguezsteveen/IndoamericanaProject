<div>
    <button class="button button-large button-rounded button-blue">Insertar post</button>
    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">

        </x-slot>
        <x-slot name="content">

        </x-slot>
        <x-slot name="footer">
            
        </x-slot>
    </x-jet-dialog-modal>


    <section id="content" class="container clearfix">
        <ul class="testimonials-grid grid-1 grid-md-2 grid-lg-3">
            @foreach ($posts as $post)
                <li class="grid-item">
                    <div class="">
                        <div class="programa-titulo">
                            {{ $post->titulo }}
                        </div>
                        <div class="programa-img">
                            <a href="#"><img src="{{ $post->img }}" alt="img_post"></a>
                        </div>
                        <div class="programa-content">
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </section><!-- #content end -->
</div>
