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
    <div class="w-full h-auto min-h-[1250px] bg-cover bg-no-repeat flex flex-wrap justify-center items-end pb-[60px]"
         style="background-image: url('images/Group 97.png')">
            <h1 class="text-center text-white font-amu font-weight-400 text-[90px] leading-[103.49px]">ԳՆԻՆ
                ՀԱՄԱՐԺԵՔ ՈՐԱԿ</h1>
        <div class="w-full">
            <a href="#menu" id="scroll-link">
                <img class="mx-auto cursor-pointer" src="/images/arrowDown.png">
            </a>
        </div>
{{--        </div>--}}
    </div>
    <div id="menu" class="w-full h-auto relative">
        <div id="menu_content" class="w-full h-auto">
            @include('menu')
        </div>
    </div>
    <div id="about-us" class="w-full h-auto pb-[30px] pt-[100px] bg-home-page-background">
        <div class="w-[85%] h-auto float-right">
            <p class="font-amu font-weight-400 text-[34px] leading-[40.25px] text-title-color text-[#485713]">ՄԵՐ ՄԱՍԻՆ</p>
            <div class="w-full h-[1px]" style="background-color: rgba(130, 132, 133, 0.5);"></div>
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
        <div class="w-[25%] float-left h-auto mt-[80px]">
            <p class="font-amu text-right font-weight-400 text-[34px] leading-[40.25px] text-[#485713] ">ԱՐՏԱԴՐԱՆՔ</p>
            <div class="w-full h-[1px]" style="background-color: rgba(130, 132, 133, 0.5);"></div>
        </div>
        <div class="w-[27%] h-[1px] bg-line-color bg-opacity-50 float-left"></div>
        <div class="w-[85%] h-auto float-right">
            <div class="w-[90%] h-auto flex justify-between pt-[20px]">
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product1.png">
                    <p class="font-amu text-[#485713] font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Լոգախցիկներ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product2.png">
                    <p class="font-amu text-[#485713] font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Պատուհաններ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product3.png">
                    <p class="font-amu text-[#485713] font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Ֆասադային կոնստրուկցիաներ
                    </p>
                </div>
                <div class="w-[23%]">
                    <img class="object-contain" src="/images/product4.png">
                    <p class="font-amu text-[#485713] font-weight-400 text-[24px] mt-[15px] leading-[27.6px] text-title-color text-center">
                        Դարպասներ
                    </p>
                </div>
            </div>
            <div class="w-[90%] h-auto pt-[80px] pb-[15px] flex flex-wrap relative">
                <img src="/images/individual.png" class="object-contain">
                <div>
                    <h1 class="font-amu text-[#485713] font-weight-400 text-[35px] mt-[40px] ml-[15px] leading-[40.25px] text-title-color">
                        Դռներ</h1>
                    <p class="font-amu font-weight-400 text-[28px] mt-[10px] ml-[15px] leading-[32.2px] text-[#637E32]">
                        Անհատական
                        պատվերների ընդունում</p>
                </div>
                <div style="box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25);"
                     class="w-[50%] h-[435px] right-0 bottom-0 bg-white absolute flex justify-center">
                    <div class="w-[60%] h-full flex flex-wrap justify-between items-center content-start">
                        <div id="doorDiv1" class="w-[35%] h-[170px] mt-[30px] ml-[6px] relative">
                            <a href="/subcategory/1" class="absolute opacity-1 image_door doorImages">
                                <img src="/images/door1.png">
                            </a>
                            <a href="/subcategory/1" class="absolute opacity-0 image_green_door doorImages">
                                <img src="/images/greenDoor1.png">
                            </a>
                        </div>
                        <div id="doorDiv2" class="w-[44%] h-[170px] mt-[30px] relative">
                            <a href="/subcategory/3" class="absolute opacity-1 image_door doorImages">
                                <img src="/images/door2.png">
                            </a>
                            <a href="/subcategory/3" class="absolute opacity-0 image_green_door doorImages">
                                <img src="/images/greenDoor2.png">
                            </a>
                        </div>
                        <div id="doorDiv3" class="w-[35%] h-[170px] mt-[30px] relative">
                            <a href="/subcategory/2" class="absolute opacity-1 image_door doorImages">
                                <img src="/images/door3.png">
                            </a>
                            <a href="/subcategory/2" class="absolute opacity-0 image_green_door doorImages">
                                <img src="/images/greenDoor3.png">
                            </a>
                        </div>
                        <div id="doorDiv4" class="w-[44%] h-[170px] mt-[30px] relative">
                            <a href="/subcategory/4" class="absolute opacity-1 image_door doorImages">
                                <img src="/images/door4.png">
                            </a>
                            <a href="/subcategory/4" class="absolute opacity-0 image_green_door doorImages">
                                <img src="/images/greenDoor4.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="font-amu font-weight-400 text-[34px] leading-[40.25px] text-title-color mt-[80px] text-[#485713]">
                Մեր աշխատանքները
            </p>
            <div class="w-full h-[1px] mt-[5px]" style="background-color: rgba(130, 132, 133, 0.5);"></div>

            <dic class="w-full h-[1px]"></dic>
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
