@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    @include('menu')
    <div class="w-[66%] h-auto pb-[120px] mt-[150px] mx-auto">
        @foreach($aboutUs as $item)
            @if($item->id % 2 != 0)
        <div class="w-full h-auto flex flex-wrap justify-between 3xl:mt-[0px] 2xl:mt-[0px] xl:mt-[30px] lg:mt-[30px] xs:mt-[30px]">
            <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg-full xs-full h-auto">
                <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain mx-auto">
            </div>
            <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg-full xs-full h-auto">
                <h1 class="font-amu font-weight-400 text-[25px] 3xl:mt-[0px] 2xl:mt-[0px] xl:mt-[30px] lg:mt-[30px] xs:mt-[30px] leading-[28.75px] text-[#637E32]">
                    {{ $item->title }}
                </h1>
                <p class="mt-[15px] font-amu font-weight-400 3xl:text-[16px] 2xl:text-[10px] leading-[19.55px] text-[#404449]">
                    {{ $item->text }}
                </p>
            </div>
        </div>
            @else
        <div class="w-full h-auto 3xl:flex 2xl:flex xl:hidden lg:hidden xs:hidden flex-wrap justify-between 3xl:mt-[10px] 2xl:mt-[10px] xl:mt-[30px] lg:mt-[30px] xs:mt-[30px]">
            <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg:w-full xs:w-full h-auto">
                <p class="font-amu font-weight-400 3xl:text-[16px] 2xl:text-[10px] leading-[19.55px] text-[#404449]">
                    {{ $item->text }}
                </p>
            </div>
            <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg:w-full xs:w-full h-auto">
                <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain mx-auto">
            </div>
        </div>
                <div class="w-full h-auto 3xl:hidden 2xl:hidden xl:flex lg:flex xs:flex flex-wrap justify-between 3xl:mt-[10px] 2xl:mt-[10px] xl:mt-[30px] lg:mt-[30px] xs:mt-[30px]">
                    <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg-full h-auto">
                        <img src="{{ Storage::url('public/' . $item->image) }}" class="object-contain mx-auto">
                    </div>
                    <div class="3xl:w-[49%] 2xl:w-[49%] xl:w-full lg-full h-auto">
                        <p class="mt-[15px] font-amu font-weight-400 3xl:text-[16px] 2xl:text-[10px] leading-[19.55px] text-[#404449]">
                            {{ $item->text }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
