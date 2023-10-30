<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <link rel="icon" href="/images/logo.png">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    <div class="w-full h-auto min-h-[1250px] bg-cover bg-no-repeat"
         style="background-image: url('images/indexImage.png')">
        <div class="w-full h-auto bg-black-37 pb-[50px]">
            <div class="w-[73%] h-[225px] mx-auto p-[40px] flex justify-between">
                <img src="images/logo.png" class="object-contain max-w-full ml-[30px]">
                <ul class="flex justify-between mt-[20px] w-[45%]">
                    <a href="/about">
                        <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">
                            Մեր մասին
                        </li>
                    </a>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">
                        <p id="showCategories" onclick="showCategories()">Արտադրանք</p>
                        <div id="categories"
                             class="hidden w-[213px] h-auto bg-[#272727] mt-[20px] pl-[20px] pb-[20px] absolute">
                            @foreach ($categories as $category)
                                <div class="w-full h-auto mt-[20px]">
                                    <div class="w-full h-full flex">
                                        <div id="category{{$category->id}}"
                                             @if(count($category->subcategories) > 0)
                                                 onclick="showSubcategories({{ $category->id }})"
                                             @endif
                                             class="allSubcategories w-[80%] flex">
                                            <p id="line{{ $category->id }}"
                                               class="line font-amu font-weight-400 text-[17px] leading-[19.55px] text-[#CECECE]">
                                                {{ $category->title }}
                                            </p>
                                            <img id="arrow{{$category->id}}" src="/images/arrowRight.png"
                                                 class="arrow opacity-0 object-contain ml-[15px]">
                                        </div>
                                        @if(count($category->subcategories) > 0)
                                            <div id="subcat{{ $category->id }}"
                                                 class="hidden subcat w-[0px] h-auto bg-[#272727] absolute left-[217px]">
                                                @foreach ($category->subcategories as $subcategory)
                                                    <p class="mt-[10px] whitespace-nowrap font-amu font-weight-400 text-[17px] leading-[19.55px] text-[#CECECE]">
                                                        {{ $subcategory->title }}
                                                    </p>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    @endforeach
                                </div>
                    </li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">
                        Նորություններ
                    </li>
                </ul>
            </div>
            <h1 class="mt-[370px] text-center text-white font-amu font-weight-400 text-[90px] leading-[103.49px]">ԳՆԻՆ
                ՀԱՄԱՐԺԵՔ ՈՐԱԿ</h1>
            <a href="#about-us" id="scroll-link">
                <img class="mx-auto cursor-pointer mt-[550px]" src="/images/arrowDown.png">
            </a>
        </div>
    </div>
    <div id="about-us" class="w-full h-auto pb-[30px] pt-[100px] bg-home-page-background">
        <div class="w-[85%] h-auto float-right">
            <p class="font-amu font-weight-400 text-[34px] leading-[40.25px] text-title-color">ՄԵՐ ՄԱՍԻՆ</p>
            <div class="w-full h-[1px] bg-line-color bg-opacity-50"></div>
            <div class="w-[90%] h-auto flex content-end pt-[40px]">
                <img class="object-contain" src="/images/AboutUs.png">
                <div class="ml-[15px] flex flex-wrap content-center">
                    <p class="font-amu font-weight-400 text-[17px] leading-[19.55px] text-title-color">ՊՐՈՖ-ԳԼԱՍՍ ՍՊԸ-ն
                        հիմնադրվել է 2016թ.-ին :Հայաստանյան շուկայում գործելով արդեն հինգ տարի ձեռք է
                        բերել մեծ փորձ, բարձր համբավ և վստահություն սպառողների և գործընկերների շրջանում:</p>
                    <p class="font-amu font-weight-400 text-[17px] leading-[19.55px] text-title-color mt-[10px]">
                        ՊՐՈՖ-ԳԼԱՍՍ ՍՊԸ ընկերությունը իրականացնում է`• Մետաղապլաստե և ալյումինե դռների, պատուհանների
                        որակյալ արտադրություն և տեղադրում։•Ճակատների (ֆասադ) պատրաստում և տեղադրում։•Ապակե լոգախցիկների
                        պատրաստում և տեղադրում։•Ապակե և մետաղական բազրիքների պատրաստում և տեղադրում։•Ապակյա կառույցների
                        պատրաստում և տեղադրում։• Նկարազարդ և նախշազարդ վիտրաժների և ցուցափեղկերի պատրաստում և
                        տեղադրում։• Սեկցիոն և փաթաթվող դարպասների պատրաստում և տեղադրում ։•Տերմո սլայդ և ծալվող դռների,
                        պատուհանների արտադրություն և տեղադրում։•Հեռակառավարվող դռների պատրաստում և տեղադրում։</p>
                    <p class="font-amu font-weight-400 text-[17px] leading-[19.55px] text-title-color mt-[10px]">
                        Ընկերությունն արտադրում է ոչ միայն օտարերկրյա հումքով ձեռք բերված ապրանքատեսականիով, այլ նաև
                        տեղական հումքով, որը շատ կարևոր է երկրի արդյունաբերության զարգացման համար:Ինչպես արտադրության,
                        այնպես էլ սպասարկման ոլորտում ընկերությունը շարունակաբար բարելավում է իր դիրքերը` բավարարելով,
                        նույնիսկ, ամենախստապահանջ հաճախորդին։Յուրաքանչյուր հաճախորդի ցուցաբերվում է անհատական մոտեցում,
                        մեր նպատակն է`մատուցել որակյալ, անթերի արտադրանք և ծառայություն :</p>
                </div>
            </div>
        </div>
        <div class="w-[85%] h-auto float-right mt-[80px]">
            <p class="font-amu font-weight-400 text-[34px] leading-[40.25px] text-title-color">ԱՐՏԱԴՐԱՆՔ</p>
        </div>
        <div class="w-[27%] h-[1px] bg-line-color bg-opacity-50 float-left"></div>
        <div class="w-[85%] h-auto float-right">
            <div class="w-[90%] h-auto flex justify-between pt-[20px]">
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product1.png">
                    <p class="font-amu font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Լոգախցիկներ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product2.png">
                    <p class="font-amu font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Պատուհաններ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product3.png">
                    <p class="font-amu font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Ֆասադային կոնստրուկցիաներ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product4.png">
                    <p class="font-amu font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Դարպասներ
                    </p>
                </div>
            </div>
            <div class="w-[90%] h-auto pt-[80px] flex flex-wrap relative">
                <img src="/images/individual.png" class="object-contain">
                <div>
                    <h1 class="font-amu font-weight-400 text-[35px] mt-[40px] ml-[15px] leading-[40.25px] text-title-color">
                        Դռներ</h1>
                    <p class="font-amu font-weight-400 text-[28px] mt-[10px] ml-[15px] leading-[32.2px] text-[#637E32]">
                        Անհատական
                        պատվերների ընդունում</p>
                </div>
                <div style="box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);"
                     class="w-[50%] h-[416px] right-0 bottom-0 bg-white absolute flex justify-center">
                    <div class="w-[60%] h-full flex flex-wrap justify-between items-center">
                        <div id="door1" class="w-[35%] h-auto">
                            <img src="/images/door1.png"
                                 class="image_door1">
                        </div>
                        <div id="door2" class="w-[35%] h-auto other_doors">
                            <img src="/images/door2.png"
                                 class="image_door2">
                        </div>
                        <div id="door3" class="w-[35%] h-auto other_doors">
                            <img src="/images/door3.png"
                                 class="image_door3">
                        </div>
                        <div id="door4" class="w-[35%] h-auto other_doors">
                            <img src="/images/door4.png"
                                 class="image_door4">
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-amu font-weight-400 text-[34px] leading-[40.25px] text-title-color mt-[80px]">Մեր
                աշխատանքները</p>
            <div class="w-full h-[1px] bg-line-color bg-opacity-50 mt-[10px]"></div>
            <div class="w-[90%] h-auto flex justify-between pt-[20px]">

            </div>
        </div>
        <div class="w-[85%] h-auto float-right pb-[110px]">
            <div class="w-[90%] h-auto flex justify-between">
                <img src="/images/ourWork1.png" class="w-[32%]">
                <img src="/images/ourWork2.png" class="w-[32%]">
                <img src="/images/ourWork3.png" class="w-[32%]">
            </div>
        </div>
        <div class="clear-both"></div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
@include('layouts.contact')
</body>
</html>
