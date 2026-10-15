@extends('layouts.base')

@section('inikita-body')
    <h1 class="text-xl font-bold mb-3">Selamat Datang di Website Inikita</h1>
     <div class="flex gap-4 flex-wrap flex-row ">
        <div class="md:w-[65%]  w-full">
            <img src="{{asset("assets/image/merch.jpg")}}" alt="conversation" class="rounded w-full h-60 sm:h-80 object-cover">
        </div>
        <div class="flex flex-col text-wrap md:w-[30%] w-full">
            <h2 class="text-bold text-lg text-wrap">
                Miliki merchandise K-Pop favoritmu di Inikita!
            </h2>
            <p> Temukan berbagai merchandise K-Pop favoritmu, mulai dari album, photocard, hingga official merchandise dari idol kesayanganmu. Belanja dengan mudah dan temukan koleksi favoritmu hanya di Inikita.
                <button class="w-60 bg-pink-400 text-white shadow-md rounded-sm px-5 py-3 cursor-pointer transition duration-300 ease-in-out hover:-translate-y-[0.3rem] hover:scale-102 active:scale-95 active:bg-pink-500">
                    Belanja Sekarang
                </button>
            </p>
        </div>
    </div>
    {{-- <p>Ini adalah halaman utama dari aplikasi.</p> --}}
@endsection
