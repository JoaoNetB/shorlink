@extends('layouts.default')

@section('title', 'Home')
@section('content')
    <nav class="flex justify-between mt-4 ml-9 mr-9 items-center">
        <div class="grid grid-cols-2 gap-5 items-center">
            <a href="" class="text-primary text-xl">Shorlink</a>
            <a href="" class="text-base">Home</a>
        </div>
        <div class="grid grid-cols-2 gap-5 items-center">
            <button class="border-2 rounded-lg text-sm border-primary text-primary pt-2.5 pb-2.5 pl-2.5 pr-2.5 hover:scale-105">sign up</button>
            <button class="border-2 rounded-lg text-sm border-primary bg-primary  text-white pt-2.5 pb-2.5 pl-2.5 pr-2.5 hover:scale-105">login</button>
        </div>
    </nav>
    <div class="flex justify-around items-center mt-20 mb-40">
        <div class="max-w-2xl">
            <h1 class="text-5xl font-bold">Shorten, share, succeed!</h1>
            <h2 class="font-normal text-3xl max-w-xl mt-2">Use friendly links to connect your audience</h2>
        </div>
        <figure>
            <img class="min-w-sm" src="/images/undraw_link_shortener.svg" alt="Illustration of a character holding a screen displaying a link symbol." />
        </figure>
    </div>
    <div class="flex justify-around items-center mt-20 mb-40">
        <figure>
            <img class="min-w-sm" src="/images/undraw_charts.svg" alt="Illustration of a character analyzing a screen with charts and data graphs." />
        </figure>
        <div class="max-w-2xl">
            <h1 class="text-5xl font-bold">See who cares about your content!</h1>
            <h2 class="font-normal text-3xl max-w-xl mt-2">Understand your visitors in real-time</h2>
        </div>
    </div>
@endsection
