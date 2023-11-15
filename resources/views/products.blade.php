@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    <div class="w-full h-auto fixed">
        @include('menu')
    </div>
    @if(count($products) > 0)
        <div class="w-[80%] h-auto mb-[120px] mt-[250px] mx-auto">
            <h1 class="font-amu font-normal 3xl:text-[25px] 2xl:text-[23px] xl:text-[18px] lg:text-[14px] text-[#272727]">{{ $title }}</h1>
            <div class="w-[70%] h-auto flex flex-wrap justify-between mx-auto">
                @foreach($products as $product)
                    <div class="3xl:w-[343px] 2xl:w-[270px] xl:w-[220px] lg:w-[180px] mt-[40px] h-auto flex flex-wrap items-end">
                        <div class="w-full 3xl:h-[414px] 2xl:h-[380px] xl:h-[290px] lg:h-[250px] flex items-end bg-white p-[10px] pb-[50px]">
                            <img src="{{ Storage::url('public/' . $product->image) }}"
                                 class="object-contain max-w-full">
                        </div>
                        <div class="w-full h-auto mt-[10px]">
                            <h1 class="font-amu font-normal 3xl:text-[25px] 2xl:text-[23px] xl:text-[18px] lg:text-[14px] text-[#272727]">
                                {{ $product->title }}
                            </h1>
                            <p class="font-amu font-normal 3xl:text-[22px] 2xl:text-[20px] xl:text-[15px] lg:text-[10px] text-[#404449] mt-[10px]">
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="w-full h-auto justify-center mt-[40px]">
                {{ $products->onEachSide(5)->links() }}
            </div>
        </div>
    @else()
        <h1 class="text-center text-[30px] font-amu font-weight-400 pb-[120px] mt-[300px]">
            Այս բաժնում արտադրանք դեռևս չկա
        </h1>
    @endif
