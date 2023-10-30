<div class="w-full h-auto relative">
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=1800&amp;height=326&amp;hl=en&amp;q=Yerevan&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <a href="https://connectionsgame.org/">Connections NYT</a></div>
        <style>.mapouter {
                position: relative;
                text-align: right;
                width: 1800px;
                height: 326px;
            }

            .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 326px;
            }

            .gmap_iframe {
                width: 100% !important;
                height: 326px !important;
            }</style>
    </div>
    <button class="w-[227px] h-[50px] bg-[#637E32] rounded-[2px] font-amu font-weight-400
     text-white text-[24px] leading-[27.6px] absolute left-[44%] top-[52%] hover:bg-[#486017] cursor-pointer">
        Ուղարկել նամակ
    </button>
    <div class="w-full h-[186px] bg-[#414141]">
        <div class="w-[77%] h-[186px] float-right flex justify-between">
            <div class="w-[15%] h-full flex items-center">
                <img src="/images/footerLogo.png" class="object-contain max-w-full">
            </div>
            <div class="w-[40%] h-auto flex">
                <div class="w-[60%] h-auto pt-[30px]">
                    <div class="w-full h-auto flex">
                        <img src="/images/mapIcon.png" class="object-contain">
                        <p class="font-noah font-weight-400 text-white text-[20px] leading-[25px] ml-[10px]">
                            Ք․ Երևան Ռոստովյան 13/1
                        </p>
                    </div>
                    <div class="w-full h-auto mt-[15px] flex">
                        <img src="/images/phoneIcon.png" class="object-contain">
                        <p class="font-noah font-weight-400 text-white text-[20px] leading-[25px] ml-[10px]">
                            +374 10 43 00 02<br> +374 77 000 465 / +374 33 433 002
                        </p>
                    </div>
                    <div class="w-full h-auto mt-[15px] flex">
                        <img src="/images/mailIcon.png" class="object-contain">
                        <p class="font-noah font-weight-400 text-white text-[20px] leading-[25px] ml-[10px]">
                            profglass01@gmail.com
                        </p>
                    </div>
                </div>
                <div class="w-[40%] h-auto flex justify-end pr-[40px] pt-[20px]">
                    <a href="#">
                        <img src="/images/facebookIcon.png" class="object-contain">
                    </a>
                    <a href="#" class="ml-[15px]">
                        <img src="/images/instagramIcon.png" class="object-contain">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-[59px] bg-[#828485] flex items-center justify-center">
        <img src="/images/footerYerevakLogo.png" class="object-contain">
    </div>
    <form class="hidden" method="post" action="/contact" onsubmit="return validateForm()">
        @csrf
        <div style="box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.25); border: 1px solid #C9C9C9"
             class="w-[459px] h-auto bg-[#828385] mx-auto m-[20px] pl-[40px] pr-[40px] pt-[50px] pb-[20px] absolute left-[40%] top-0">
            @if(session('success'))
                <div id="success" class="text-[#3bc43b] pb-[20px]">
                    {{ session('success') }}
                </div>
            @endif
            <input style="color:rgba(107, 103, 100, 0.8)" type="text" name="name" class="w-full h-[39.98px] rounded-[8px]
        font-amu font-weight-400 text-[17px] leading-[25px]" placeholder="Անուն Ազգանուն">
            <span class="text-red-600" id="name-error"></span>

            <input style="color:rgba(107, 103, 100, 0.8)" type="number" name="phone" class="w-full h-[39.98px] rounded-[8px]
        font-amu mt-[20px] font-weight-400 text-[17px] leading-[25px]" placeholder="Հեռ․">
            <span class="text-red-600" id="phone-error"></span>

            <input style="color:rgba(107, 103, 100, 0.8)" type="email" name="email" class="w-full h-[39.98px] rounded-[8px]
        font-amu mt-[20px] font-weight-400 text-[17px] leading-[25px]" placeholder="Էլ․ հասցե">
            <span class="text-red-600" id="email-error"></span>

            <textarea style="color:rgba(107, 103, 100, 0.8);" type="text" name="message"
                      class="w-full h-[150px]  rounded-[8px] font-amu mt-[20px] font-weight-400 text-[17px] leading-[25px]">
        </textarea>
            <span class="text-red-600" id="message-error"></span>

            <div class="w-full h-auto flex justify-center mt-[15px]">
                <button type="submit"
                        class="w-[108px] h-[23px] rounded-[2px] bg-[#637E32] hover:bg-[#486017] font-amu font-weight-400 text-[16px] leading-[25px] text-white">
                    Հաստատել
                </button>
            </div>
        </div>
    </form>
</div>
