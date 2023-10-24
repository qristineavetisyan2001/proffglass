@extends('layouts.alternative')

@section('title', 'Proff Glass')

@section('content')
    <div class="w-full h-[1250px] bg-cover bg-no-repeat" style="background-image: url('images/indexImage.png')">
        <div class="w-full h-full bg-black-37">
            <div class="w-[73%] h-[150px] mx-auto p-[40px] grid gap-8 grid-cols-3">
                <img src="images/logo.png" class="col-span-1">
                <ul class="col-span-2 flex justify-between mt-[20px]">
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Մեր մասին
                    </li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Արտադրանք
                    </li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">Մեր
                        աշխատանքները
                    </li>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-white cursor-pointer">
                        Նորություններ
                    </li>
                </ul>
            </div>
            <h1 class="mt-[370px] text-center text-white font-amu font-weight-400 text-[90px] leading-[103.49px]">ԳՆԻՆ
                ՀԱՄԱՐԺԵՔ ՈՐԱԿ</h1>
            <img class="mx-auto cursor-pointer mt-[550px]" src="/images/arrowDown.png">
        </div>
    </div>
    <div class="w-full h-auto pb-[30px] pt-[100px] bg-home-page-background">
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
        </div>
        <div class="clear-both"></div>
    </div>

