@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    @include('layouts.menu')
    <div class="w-[66%] h-auto pb-[120px] mx-auto">
        @foreach($aboutUs as $item)
            @if($item->id % 2 != 0)
        <div class="w-full h-auto flex justify-between">
            <div class="w-[49%] h-auto">
                <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain">
            </div>
            <div class="w-[49%] h-auto">
                <h1 class="font-amu font-weight-400 text-[25px] leading-[28.75px] text-[#637E32]">
                    {{ $item->title }}
                </h1>
                <p class="mt-[15px] font-amu font-weight-400 text-[16px] leading-[19.55px] text-[#404449]">
                    {{ $item->text }}
                </p>
            </div>
        </div>
            @else
        <div class="w-full h-auto flex justify-between mt-[10px]">
            <div class="w-[49%] h-auto">
                <p class="font-amu font-weight-400 text-[16px] leading-[19.55px] text-[#404449]">
                    {{ $item->text }}
                </p>
            </div>
            <div class="w-[49%] h-auto">
                <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain">
            </div>
        </div>
            @endif
        @endforeach
    </div>
