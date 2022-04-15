@extends('layouts.app')

@section('content')

<section class="section_baner_posts">
    <div class="baner_posts">
       <div class="text_baner_posts">
           Los inmuebles son la mejor forma de <strong>invertir</strong> a mediano y largo plazo
       </div>
    </div>
</section>

@livewire('posts-list')

@endsection

