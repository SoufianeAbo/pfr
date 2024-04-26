@include('includes.header')
<body>
    @include('includes.navbarsticky')
    <div class = "flex flex-row justify-between bg-black text-white px-8 py-4 sticky top-0 z-50 border-t-4 border-[{{ $project->assets->bgColor }}]">
        <img class = "w-1/6" src="{{ $project->pictures->smallLogo }}" alt="">
        <button class = "bg-[{{ $project->assets->bgColor }}] rounded-lg px-8">SHOP NOW</button>
    </div>
    <video class = "w-full" loop muted autoplay src="{{ $project->pictures->pageVid }}"></video>
    <div class = "sticky">
        <div class = "gameBg relative flex flex-col items-center">
            <img class = "w-1/2 absolute top-[-128px]" src="{{ $project->pictures->bigLogo }}" alt="">
            <p class = "text-white text-[2.5rem] mt-32 boldfour uppercase">{{ $project->title }}</p>
            <div class = "flex flex-row text-sm tracking-tight text-[{{ $project->assets->bgColor }}] gap-4">
                <p>Release Date: <span class = "text-white">{{ $project->releaseDate }}</span></p>
                <p>Genres: <span class = "text-white">RPG</span></p>
                <p>Developer: <span class = "text-white">{{ $project->developer }}</span></p>
            </div>
            <div class = "flex flex-row text-white justify-between w-10/12 mt-16 gap-4">
                <div>
                    <h1 class = "text-3xl mb-8">{{ $project->text->headerBig }}</h1>
                    <div class = "text-sm flex flex-col gap-4">
                        <p>{!!  $project->text->headerDesc !!}</p>

                        <img class = "w-2/3 mt-16 self-center" src="{{ $project->pictures->awards }}" alt="">
                        <p class = "text-xs">25/02/2022</p>
                        <div class = "flex flex-row gap-4">
                            @foreach ($project->platforms as $console)
                            <div class = "p-3 rounded border">
                                @include($console->platform->icon)
                            </div>
                            @endforeach
                        </div>
                        
                        <a href="#" class = "tracking-widest boldmedium px-6 py-4 bg-[{{ $project->assets->bgColor }}] rounded-lg w-fit"><i class="fa-solid fa-bag-shopping mr-2"></i>Shop now</a>
                    </div>
                </div>
                <video class = "w-[55%] rounded-lg self-start" loop muted autoplay src="{{ $project->pictures->headerVid }}"></video>
            </div>
            <img class = "w-1/2 mt-8" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/00-page-setup/ER-Notes-920x160.jpg?twic=v1/resize=1150/step=10/quality=80" alt="">
        </div>
    </div>
    <div class = "gameBg2 text-white w-full flex justify-center">
        <div class = "w-2/3">
            <h2 class = "text-4xl my-16">Key features</h2>
            @foreach ($project->features as $feature)
                @if ($loop->iteration == 1)
                    <div class = "flex flex-row mb-24">
                    <video class = "w-1/2" loop muted autoplay src="{{ $feature->video }}"></video>
                    <div class = "flex flex-col text-white mt-8">
                        <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[{{ $project->assets->bgColor }}] relative right-10">{{ $feature->header }}</p>
                @elseif ($loop->even)
                    <div class = "flex flex-row-reverse mt-12 mb-24">
                    <video class = "w-1/2" loop muted autoplay src="{{ $feature->video }}"></video>
                    <div class = "flex flex-col text-white mt-8">
                        <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[{{ $project->assets->bgColor }}] relative left-10">{{ $feature->header }}</p>
                @else
                    <div class = "flex flex-row mt-12 mb-24">
                    <video class = "w-1/2" loop muted autoplay src="{{ $feature->video }}"></video>
                    <div class = "flex flex-col text-white mt-8">
                        <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[{{ $project->assets->bgColor }}] relative right-10">{{ $feature->header }}</p>
                @endif
                        <p class = "pl-16 pt-4 text-[0.920rem]">{!! $feature->description !!}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class = "gameBg w-full flex flex-col items-center pb-8">
        <div class = "flex flex-col items-center pt-8 w-[55%] text-center text-white">
            <img class = "pb-16" src="{{ $project->pictures->divider }}" alt="">
            <p class = "text-[{{ $project->assets->bgColor }}] text-4xl boldfour pb-8">{{ $project->text->postfBig }}</p>
            <div class = "text-[0.975rem] tracking-tight flex flex-col gap-4">
                <p>{!! $project->text->postfDesc !!}</p>
            </div>
            <img class = "pt-16 pb-8" src="{{ $project->pictures->divider }}" alt="">
        </div>
        <div class = "flex flex-row justify-around">
            <img class = "w-[30%] hover:scale-105 transition-all" src="{{ $project->pictures->pic1 }}" alt="">
            <img class = "w-[30%] hover:scale-105 transition-all" src="{{ $project->pictures->pic2 }}" alt="">
            <img class = "w-[30%] hover:scale-105 transition-all" src="{{ $project->pictures->pic3 }}" alt="">
        </div>
        <img class = "pt-16 pb-8 w-[55%]" src="{{ $project->pictures->divider }}" alt="">
        <div class = "w-[55%] text-center text-white text-[0.975rem] tracking-tight flex flex-col gap-4">
            <p>{!! $project->text->secondfDesc !!}</p>
        </div>
        <img class = "my-12" src="{{ $project->pictures->divider2 }}" alt="">
        <p class = "my-12 self-start text-white text-4xl boldfour pl-24">System requirements :</p>
        <div class = "flex flex-row w-full pl-24 gap-8">
            <div class = "flex flex-col">
                <p class = "text-xl text-white">Minimum</p>
                <div class = "border border-white px-6 py-4 mt-4">
                    <ul class = "list-disc nobold text-white">
                        {!! $project->text->minimumReq !!}
                    </ul>
                    <p class = "mt-12 italic text-white">Current specs are valid for launch day and may be updated in the future.</p>
                </div>
            </div>
            <div class = "flex flex-col">
                <p class = "text-xl text-white">Recommended</p>
                <div class = "border border-white px-6 py-4 mt-4">
                    <ul class = "list-disc nobold text-white">
                        {!! $project->text->recomReq !!}
                    </ul>
                    <p class = "mt-12 italic text-white">Current specs are valid for launch day and may be updated in the future.</p>
                </div>
            </div>
        </div>
    </div>
    <div class = "bg-[#e8ebee] px-24 pt-8 pb-8">
        <p class = "text-4xl boldfour text-[#1e244d]">You may also like</p>
        <div class="flex flex-row mt-4 justify-between">
            <div class="hover:top-4 top-0 animate-slide-in-blurred-bottom relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                <img class="rounded-lg" src="https://cdn2.steamgriddb.com/thumb/2d2a62f0f4b1f5b7c40d4324e309f39c.jpg" alt="">
                <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                    <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl">FINAL FANTASY VII REMAKE</p>
                    <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                    <img class="group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                </div>
            </div>

            <div class="hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[150ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                <img class="rounded-lg" src="https://cdn2.steamgriddb.com/thumb/b7dc60f5a597d2a0687c2c43a3cd3417.jpg" alt="">
                <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                    <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl">ELDEN RING</p>
                    <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                    <img class="group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                </div>
            </div>

            <div class="hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[300ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                <img class="rounded-lg" src="https://cdn2.steamgriddb.com/thumb/324fd03958724e32847aa8b8e35b511f.jpg" alt="">
                <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                    <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl">SEKIRO: SHADOWS DIE TWICE</p>
                    <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                    <img class="group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                </div>
            </div>

            <div class="hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[450ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                <img class="rounded-lg" src="https://cdn2.steamgriddb.com/thumb/03435e70b2d275b16191f12f3b41df2f.jpg" alt="">
                <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                    <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl">YAKUZA 0</p>
                    <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                    <img class="group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                </div>
            </div>
        </div>
        <div class = "w-full flex justify-center mt-8">
            <a href = "{{ route('games.index') }}" class = "px-6 py-2 rounded-lg bg-[#c19d53] text-white">SEE ALL GAMES</a>
        </div>
    </div>
    @include('includes.footer')
</body>