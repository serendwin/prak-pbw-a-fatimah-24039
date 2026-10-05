@extends('layouts.base')
@section('inikita-body')
    <div class="flex gap-4 flex-wrap flex-row ">
        <div class="md:w-[65%]  w-full">
            <img src="{{asset("assets/image/jiwoo.jpg")}}" alt="about-us" class="rounded w-full h-80 sm:h-100 object-cover">
        </div>
        <div class="flex flex-col text-wrap md:w-[30%] w-full">
            <h2 class="text-bold text-xl text-wrap">
                Tentang Kami
            </h2>
            <hr>
            <p>toko online sederhana untuk menjual berbagai merchandise K-Pop.
            </p>
        </div>
    </div>
@endsection
