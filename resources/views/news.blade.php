@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    @include('menu')

    <div class="w-[80%] h-auto mx-auto pb-[120px] mt-[100px]">
        <h1 class="font-amu font-normal 3xl:text-[25px] 2xl:text-[23px] xl:text-[18px] lg:text-[14px] text-[#272727]">{{ $title }}</h1>
        <div class="w-full h-auto flex flex-wrap justify-between mt-[40px]">
            @foreach($news as $item)
                <a class="w-[30%] h-auto cursor-pointer" href="/news/{{ $item->id }}">
                    <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain w-full">
                    <div class="w-full h-auto flex justify-start items-center mt-[10px]">
                        <div class="w-[23px] h-[1px] bg-[#637E32]"></div>
                        <h1 class="font-amu font-weight-400 text-[15px] leading-[17.25px] text-[#637E32] ml-[10px]">
                            {{ $item->title }}
                        </h1>
                    </div>
                    <p class="font-amu font-weight-400 text-[18px] leading-[20.7px] text-[#404449] mt-[10px] line-clamp-3">
                        {{ $item->text }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
