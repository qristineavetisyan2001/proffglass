@extends('layouts.alternative')

@section('title', 'Proff Glass')

@section('content')
    <div class="w-full h-[1250px] bg-cover bg-no-repeat" style="background-image: url('images/indexImage.png')">
        <div class="w-full h-full bg-black-37">
            <div class="w-[73%] h-[150px] mx-auto p-[40px] grid gap-8 grid-cols-3">
                <img src="images/logo.png" class="col-span-1">
                <ul class="col-span-2 flex justify-between mt-[20px]">
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Մեր մասին</li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Արտադրանք</li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Մեր աշխատանքները</li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Նորություններ</li>
                </ul>
            </div>
        </div>
    </div>
