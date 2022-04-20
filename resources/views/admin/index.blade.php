@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<section class="welcome_animation">
    <h1 class="welcome">
        <span>w</span>
        <span>e</span>
        <span>l</span>
        <span>c</span>
        <span>o</span>
        <span>m</span>
        <span>e</span>
    </h1>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
.welcome_animation{
	 width: 100%;
	 height: 50vh;
	 display: flex;
	 align-items: center;
	 justify-content: center;
}
 .welcome {
	 color: var(--fondo-primario);
	 font-size: 52px;
	 font-weight: 600;
	 text-transform: uppercase;
}
 .welcome span {
	 display: inline-block;
	 opacity: 0;
	 transform: translateY(20px) rotate(90deg);
	 transform-origin: left;
	 animation: in 0.5s forwards;
}
 .welcome span:nth-child(1) {
	 animation-delay: 0.1s;
}
 .welcome span:nth-child(2) {
	 animation-delay: 0.2s;
}
 .welcome span:nth-child(3) {
	 animation-delay: 0.3s;
}
 .welcome span:nth-child(4) {
	 animation-delay: 0.4s;
}
 .welcome span:nth-child(5) {
	 animation-delay: 0.5s;
}
 .welcome span:nth-child(6) {
	 animation-delay: 0.6s;
}
 .welcome span:nth-child(7) {
	 animation-delay: 0.7s;
}
 @keyframes in {
	 0% {
		 opacity: 0;
		 transform: translateY(50px) rotate(90deg);
	}
	 100% {
		 opacity: 1;
		 transform: translateY(0) rotate(0);
	}
}

    </style>
@stop

@section('js')



@stop
