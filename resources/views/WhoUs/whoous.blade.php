@extends('layout.master')

@section('content')
    <div class="min-h-screen flex flex-col items-center  bg-gray-100 px-7 bg-grey-100">
        <div class="text-center mb-16 mt-40">
            <h1 class="text-4xl md:text-5xl font-bold text-blue-900 mb-6">  <span> {{ $notes->title }}</span></h1>
            <div class="border-b-4 border-blue-600 w-24 mx-auto mt-2"></div>
        </div>
        <div class="relative lg:max-w-7xl w-full bg-white rounded-lg p-9 border border-gray-200 hover:scale-105 duration-300 ease-in-out transform mb-20">

            <div class="flex justify-center">
                <img src="{{asset('storage/' . $notes->image)}}" class="w-36 h-36 rounded-full shadow-lg border-4 border-white">
            </div>

            <div class="text-gray-700 text-lg leading-relaxed text-justify space-y-6 mt-8 font-bold">
                <span> {!! $notes->content !!} </span>

            </div>

            <div class="mt-6 text-left">

            </div>


        </div>
    </div>
@endsection
