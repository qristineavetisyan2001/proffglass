@extends('layouts.guest')

@section('title', 'Proff Glass')

@section('content')
    @include('layouts.menu')
    @if(count($products) > 0)
      <div class="w-[60%] h-auto flex flex-wrap justify-between mx-auto mb-[120px]">
          @foreach($products as $product)
              <div class="w-[29%] h-[auto]">
                  <img src="{{ Storage::url('public/' . $product->image) }}" class="object-contain">
                  <h1 class="font-amu font-weight-400 text-[25px] text-[#272727] text-center leading-[28.75px]">
                      {{ $product->title }}
                  </h1>
                  <p class="font-amu font-weight-400 text-[22px] text-[#404449] text-center leading-[25.3px] mt-[10px]">
                      {{ $product->description }}
                  </p>
              </div>
          @endforeach
      </div>
    @else()
        <h1 class="text-center text-[30px] font-amu font-weight-400 pb-[120px]">
            Այս բաժնում արտադրանք դեռևս չկա
        </h1>
    @endif
