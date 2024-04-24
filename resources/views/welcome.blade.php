@include('includes.header')
<body>
    @include('includes.navbar')
    <div class = "pt-24 pl-8 text-[#0e2130] text-6xl flex flex-col gap-12">
        <div class = "flex flex-row items-center gap-4">
            <img class = "w-12 h-12 drop-shadow-md" src="neolinelogoonly.png" alt="">
            <p class = "text-[28px]">Neoline</p>
        </div>
        <div class = "toptitle flex flex-col justify-between static md:relative mb-[32rem] md:mb-72">
            <div class = "md:pt-12 pb-12 md:pb-0 md:pl-8">
                <p>We are</p>
                <p>Neoline Studios</p>
                <p>Africa</p>
            </div>
            <div class = "relative md:static">
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[250ms] md:animate-slide-top delay-75 absolute top-8 right-[0%] md:right-[22%] h-20% imgclip w-[50%] md:w-[20%] mr-24" src="{{ $featured[2]->assets->gridVertical2 }}" alt="">
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[500ms] md:animate-slide-top absolute top-0 right-[15%] md:right-[12%] h-20% imgclip w-[50%] md:w-[20%] mr-24" src="{{ $featured[1]->assets->gridVertical2 }}" alt="">
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[700ms] md:animate-slide-top absolute top-16 right-[30%] md:right-0 h-20% imgclip w-[50%] md:w-[20%] mr-24" src="{{ $featured[0]->assets->gridVertical2 }}" alt="">
            </div>
        </div>
    </div>
    <div id = "game1">
        <div class = "flex justify-end">
            <div class = "flex flex-col gap-8 text-2xl mr-8">
                <div class = "bg-white p-8 rounded-lg text-[#e20613] mt-48 w-96 flex flex-row gap-8">
                    <img class = "w-1/4 border-2 rounded hover:scale-150 transition-all border-[#e20613]" src="{{ $featured[0]->assets->smallLogo }}" alt="">
                    <p class = "uppercase">{{ $featured[0]->title }}</p>
                </div>

                <div class = "bg-white p-8 rounded-lg text-3xl text-black w-96">
                    <p>{{ $featured[0]->subtitle }}</p>
                    <button class = "btn border border-[#e20613] hover:text-[#e20613] hover:bg-white transition-all text-xs tracking-widest bg-[#e20613] text-white p-8 w-full mt-4 rounded-lg">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div id = "game2">
        <div class = "flex justify-end">
            <div class = "flex flex-col gap-8 text-2xl mr-8">
                <div class = "bg-white p-8 rounded-lg text-[#e20613] mt-48 w-96 flex flex-row gap-8">
                    <img class = "w-1/4 border-2 rounded hover:scale-150 transition-all border-[#e20613]" src="{{ $featured[1]->assets->smallLogo }}" alt="">
                    <p class = "uppercase">{{ $featured[1]->title }}</p>
                </div>

                <div class = "bg-white p-8 rounded-lg text-3xl text-black w-96">
                    <p>{{ $featured[1]->subtitle }}</p>
                    <button class = "btn border border-[#e20613] hover:text-[#e20613] hover:bg-white transition-all text-xs tracking-widest bg-[#e20613] text-white p-8 w-full mt-4 rounded-lg">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div id = "game3">
        <div class = "w-full flex flex-col gap-40">
            <div class = "bg-white p-8 rounded-lg text-black text-5xl w-1/3 mt-12 ml-4">
                <p>Explore more games</p>
            </div>
            <button class = "mr-4 w-fit self-end mb-4 bg-white py-6 px-4 rounded-lg text-[#e20613] text-sm transition-all hover:bg-[#e20613] hover:text-white tracking-wider">FIND MORE</button>
        </div>
        <div class = "flex flex-row justify-around">
            <div id = "caroGame1" class = "bg-cover hover:bg-auto hover:bg-top rounded-lg transition-all flex justify-between">
                <img class = "w-1/2 mt-24 ml-4 mb-4" src="https://cdn2.steamgriddb.com/logo_thumb/d06f854e3f106600235dc4ac0e08b537.png" alt="">
            </div>

            <div id = "caroGame2" class = "bg-cover hover:bg-auto hover:bg-center rounded-lg transition-all flex justify-between">
                <img class = "w-1/2 mt-24 ml-4 mb-4 object-contain" src="https://cdn2.steamgriddb.com/logo_thumb/fe45e3227f3805b1314414203c4e5206.png" alt="">
            </div>
        </div>
        <div class = "mb-16">
            <button class = "w-fit flex m-auto px-8 py-6 mt-8 rounded-lg text-white bg-[#e20613] hover:text-[#e20613] hover:bg-white transition-all border border-[#e20613]">ALL UPCOMING RELEASES</button>
        </div>

        <div class = "flex flex-row">
            <img src="abovefooter.png" alt="" class = "w-[63%]">
            <div class = "flex flex-col items-center w-full p-16 mt-16 text-center">
                <img class = "mb-8" src="https://en.bandainamcoent.eu/themes/custom/bne_ultimate/themes/bne_front/images/masks/mask-newsletter.svg" alt="">
                <p class = "text-4xl">For job offers, head to our careers page!</p>
                <button class = "w-fit flex m-auto px-8 py-6 mt-8 rounded-lg text-white bg-[#e20613] hover:text-[#e20613] hover:bg-white transition-all border border-[#e20613]">JOB CAREERS</button>
            </div>
        </div>
        @include('includes.footer')
    </div>
</body>
</html>