<div class="w-[110%] h-auto flex relative">
    <div class="w-[26%] h-[200px] bg-[#404338] ml-[-40px] flex justify-center items-center"
         style="transform: skewX(20deg);">
        <img src="images/menuLogo.png" class="object-contain 3xl:max-w-full md:max-w-[150px]"
             style="transform: skewX(-20deg);">
    </div>
    <div class="w-[70%] h-[200px]" style="transform: skewX(20deg)">
        <div class="w-full h-[65px] bg-[#F1F1F1] ml-[-1px]">
            <div class="w-[95%] h-full flex justify-end items-center">
                <div class="3xl:w-[45%] 2xl:w-[60%] xl:w-[65%] lg:w-[70%] md:w-full h-auto flex justify-between"
                     style="transform: skewX(-20deg);">
                    <div class="w-[89.5%] h-auto flex justify-between">
                        <div class="w-[50%] h-auto flex justify-end">
                            <img src="images/menuMap.png" class="object-contain max-w-[10px]">
                            <h1 class="font-noah font-weight-400 text-[16px] leading-[25px] text-[#485713] ml-[10px]">
                                Ք․ Երևան Ռոստովյան 13/1
                            </h1>
                        </div>
                        <div class="w-[50%] h-auto flex justify-center">
                            <img src="images/menuPhone.png" class="object-contain max-w-[10px]">
                            <h1 class="font-noah font-weight-400 text-[16px] leading-[25px] text-[#485713] ml-[10px]">
                                +374 10 43 00 02
                            </h1>
                        </div>
                    </div>
                    <div class="w-[10.5%] h-auto flex justify-between">
                        <img src="images/menuFacebook.png" class="object-contain max-w-[25px]">
                        <img src="images/menuInstagram.png" class="object-contain max-w-[25px]">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[135px] bg-[#485713] ml-[-1px] flex justify-center items-center">
            <div class="w-full h-auto flex justify-end">
                <div class="3xl:w-[85%] 2xl:w-[95%] xl:w-[95%] lg:w-[95%] h-auto flex justify-between" style="transform: skewX(-20deg)">
                    <ul class="flex justify-between 3xl:w-[55%] 2xl:w-[55%] xl:w-[60%] lg:w-[60%]">
                        <a class="flex items-center" href="/about">
                            <li class="font-[ArialAmu] uppercase font-normal 3xl:text-[25px] 2xl:text-[25px] xl:text-[22px] leading-[28.75px] text-white cursor-pointer">
                                Մեր մասին
                            </li>
                        </a>
                        <li class="font-[ArialAmu] uppercase 3xl:text-[25px] 2xl:text-[25px] xl:text-[22px] leading-[28.75px] text-white cursor-pointer">
                            <div class="w-full h-full flex items-center">
                                <p id="showCategories" onclick="showCategories()">Արտադրանք</p>
                            </div>
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
                                                        <a href="/subcategory/{{ $subcategory->id }}">
                                                            <p class="mt-[10px] whitespace-nowrap font-amu font-weight-400 text-[17px] leading-[19.55px] text-[#CECECE]">
                                                                {{ $subcategory->title }}
                                                            </p>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        </li>
                        <a class="flex items-center" href="/news">
                            <li class="font-[ArialAmu] uppercase font-normal 3xl:text-[25px] 2xl:text-[25px] xl:text-[22px] leading-[28.75px] text-white cursor-pointer">
                                Նորություններ
                            </li>
                        </a>
                    </ul>
                    <div class="3xl:w-[27%] 2xl:w-[27%] xl:w-[32%] lg:w-[32%] h-auto">
                        <button
                            class="openChat 3xl:w-[230px] 2xl:w-[230px] xl:w-[230px] lg:w-[180px] text-white font-[ArialAmu] uppercase h-[48px] bg-[#637E32] hover:bg-[#4F6526FF]"
                            style="box-shadow: 0 2px 7px -2px rgba(0, 0, 0, 0.25)">
                            Ուղարկել նամակ
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    @font-face {
        font-family: 'ArialAmu';
        src: url('{{ asset('fonts/arnamu_bold.ttf') }}') format('truetype');
    }
</style>
