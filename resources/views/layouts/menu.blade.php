<div class="w-full h-auto bg-no-repeat relative"
     style="background-image: url('{{ asset('images/menuImage.png') }}')">
    <div class="w-full h-auto bg-white bg-opacity-50">
        <div class="w-[73%] h-[225px] pb-[440px] mx-auto pt-[20px] flex justify-between">
            <a href="/">
                <img src="{{ asset('images/menuLogo.png') }}"
                     class="object-contain max-w-full ml-[8px] mt-[21px] cursor-pointer">
            </a>
            <div class="w-[59.5%] pt-[15px]">
                <ul class="flex justify-between w-[70%]">
                    <a href="/about">
                        <li class="font-amu font-normal text-[25px] leading-[28.75px] text-[#272727] cursor-pointer">
                            Մեր մասին
                        </li>
                    </a>
                    <li class="font-amu font-normal text-[25px] leading-[28.75px] text-[#272727] cursor-pointer">
                        <p id="showCategories" onclick="showCategories()">Արտադրանք</p>
                        <div id="categories"
                             class="hidden z-[100] w-[213px] h-auto bg-[#272727] mt-[20px] pl-[20px] pb-[20px] absolute">
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
                    <a href="/news">
                        <li class="font-amu font-normal text-[25px] leading-[28.75px] text-[#272727] cursor-pointer">
                            Նորություններ
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        @if(isset($title))
            <div class="w-full h-auto absolute top-[40%]">
                <h1 class="text-center font-amu font-weight-400 text-[50px] leading-[57.5px] text-[#404449]">{{ $title }}</h1>
                @if(isset($subtitle))
                    <p class="text-center font-amu font-weight-400 text-[25px] leading-[28.75px] text-[#272727] mt-[20px]">{{ $subtitle }}</p>
                @endif
            </div>
        @endif
    </div>
</div>
