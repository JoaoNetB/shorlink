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
@endsection
