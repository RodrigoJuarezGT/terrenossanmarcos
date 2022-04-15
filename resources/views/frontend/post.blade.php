@extends('layouts.app')

@section('content')

<section class="section_baner_posts">
    <div class="baner_posts">
       <div class="text_baner_posts">
           Los inmuebles son la mejor forma de <strong>invertir</strong> a mediano y largo plazo
       </div>
    </div>
</section>

<section class="show_post">
    <div>
        <img src="{{ $post->get_image }}" alt="" width="100%" height="100%">
    </div>
    <div>
        <h3>{{ $post->title }}</h3>
    </div>
    <div>
        {!! $post->content !!}
    </div>
    <div>
        Ultima actualización: {{ $post->date }}
    </div>
</section>

@endsection
