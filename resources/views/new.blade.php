@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    @include('layouts.menu')

    <div class="w-[80%] h-auto mx-auto mb-[90px]">
        <h1 class="font-amu font-weight-400 text-[25px] text-center leading-[17.25px] text-[#637E32] ml-[10px]">
            {{ $new->title }}
        </h1>
        <div class="w-[80%] h-auto flex justify-between mx-auto mt-[30px]">
            <div class="w-[60%]">
                <p class="font-amu font-weight-400 text-[20px] leading-[20.7px] text-[#404449]">
                    {{ $new->text }}
                </p>
            </div>
            <div class="w-[39%]">
                <img src="{{ Storage::url('public/' . $new->image) }}" class="object-contain">
            </div>
        </div>
    </div>

    <div class="w-[80%] h-auto mx-auto flex flex-wrap justify-start pb-[120px]">
        @foreach($news as $item)
            <a class="w-[20%] h-auto cursor-pointer ml-[40px]" href="/new/{{ $item->id }}">
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
