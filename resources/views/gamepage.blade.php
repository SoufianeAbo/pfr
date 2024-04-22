@include('includes.header')
<body>
    @include('includes.navbarsticky')
    <div class = "flex flex-row justify-between bg-black text-white px-8 py-4 sticky top-0 z-50 border-t-4 border-[#c19d53]">
        <img class = "w-1/6" src="https://cdn2.steamgriddb.com/logo_thumb/6076036fdb272f49688c571013f3ede1.png" alt="">
        <button class = "bg-[#c19d53] rounded-lg px-8">SHOP NOW</button>
    </div>
    <video class = "w-full" loop muted autoplay src="https://static.bandainamcoent.eu/video/elden-ring-header-animated.webm"></video>
    <div class = "sticky">
        <div class = "gameBg relative flex flex-col items-center">
            <img class = "w-1/2 absolute top-[-128px]" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/00-page-setup/eldenring_new.png?twic=v1/resize=1000/step=10/quality=80" alt="">
            <p class = "text-white text-[2.5rem] mt-32 boldfour">ELDEN RING</p>
            <div class = "flex flex-row text-sm tracking-tight text-[#c19d53] gap-4">
                <p>Release Date: <span class = "text-white">25/02/2022</span></p>
                <p>Genres: <span class = "text-white">RPG</span></p>
                <p>Developer: <span class = "text-white">FromSoftware, Inc</span></p>
            </div>
            <div class = "flex flex-row text-white justify-between w-10/12 mt-16 gap-4">
                <div>
                    <h1 class = "text-3xl mb-8">The Golden Order has been broken.</h1>
                    <div class = "text-sm flex flex-col gap-4">
                        <p>Rise, Tarnished, and be guided by grace to brandish the power of the Elden Ring and become an Elden Lord in the Lands Between.</p>
                        <p>In the Lands Between ruled by Queen Marika the Eternal, the Elden Ring, the source of the Erdtree, has been shattered.</p>
                        <p>Marika's offspring, demigods all, claimed the shards of the Elden Ring known as the Great Runes, and the mad taint of their newfound strength triggered a war: The Shattering. A war that meant abandonment by the Greater Will.</p>
                        <p>And now the guidance of grace will be brought to the Tarnished who were spurned by the grace of gold and exiled from the Lands Between. Ye dead who yet live, your grace long lost, follow the path to the Lands Between beyond the foggy sea to stand before the Elden Ring.</p>
                        <p class = "boldfour mt-16">And become the Elden Lord.</p>

                        <img class = "w-2/3 mt-16 self-center" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/00-page-setup/ER-award-banner_2023.png?twic=v1/step=10/quality=95" alt="">
                        <p class = "text-xs">25/02/2022</p>
                        <div class = "flex flex-row gap-4">
                            <div class = "p-3 rounded border">
                                @include('svg.ps4icon')
                            </div>
                            <div class = "p-3 rounded border">
                                @include('svg.xboxone')
                            </div>
                            <div class = "p-3 rounded border">
                                @include('svg.ps5icon')
                            </div>
                        </div>
                        
                        <a href="#" class = "tracking-widest boldmedium px-6 py-4 bg-[#c19d53] rounded-lg w-fit"><i class="fa-solid fa-bag-shopping mr-2"></i>Shop now</a>
                    </div>
                </div>
                <video class = "w-[55%] rounded-lg self-start" loop muted autoplay src="https://static.bandainamcoent.eu/video/elden-ring-autoplay-launch-trailer.webm"></video>
            </div>
            <img class = "w-1/2 mt-8" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/00-page-setup/ER-Notes-920x160.jpg?twic=v1/resize=1150/step=10/quality=80" alt="">
        </div>
    </div>
    <div class = "gameBg2 text-white w-full flex justify-center">
        <div class = "w-2/3">
            <h2 class = "text-4xl my-16">Key features</h2>
            <div class = "flex flex-row">
                <video class = "w-1/2" loop muted autoplay src="https://static.bandainamcoent.eu/video/eldenring-kf-01-animated-new.webm"></video>
                <div class = "flex flex-col text-white mt-8">
                    <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[#c19d53] relative right-10">A NEW FANTASY WORLD</p>
                    <p class = "pl-16 pt-4 text-[0.920rem]">Journey through the Lands Between, a new fantasy world created by Hidetaka Miyazaki, creator of the influential DARK SOULS video game series, and George R. R. Martin, author of The New York Times best-selling fantasy series, A Song of Ice and Fire. </p>
                    <p class = "pl-16 pt-4 text-[0.920rem]">Unravel the mysteries of the Elden Ring’s power. Encounter adversaries with profound backgrounds, characters with their own unique motivations for helping or hindering your progress, and fearsome creatures. </p>
                </div>
            </div>
            <div class = "flex flex-row-reverse mt-12">
                <video class = "w-1/2" loop muted autoplay src="https://static.bandainamcoent.eu/video/eldenring-kf-01-animated-new.webm"></video>
                <div class = "flex flex-col text-white mt-8">
                    <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[#c19d53] relative left-10">A NEW FANTASY WORLD</p>
                    <p class = "pr-16 pt-4 text-[0.920rem] text-right">Journey through the Lands Between, a new fantasy world created by Hidetaka Miyazaki, creator of the influential DARK SOULS video game series, and George R. R. Martin, author of The New York Times best-selling fantasy series, A Song of Ice and Fire. </p>
                    <p class = "pr-16 pt-4 text-[0.920rem] text-right">Unravel the mysteries of the Elden Ring’s power. Encounter adversaries with profound backgrounds, characters with their own unique motivations for helping or hindering your progress, and fearsome creatures. </p>
                </div>
            </div>
            <div class = "flex flex-row mt-12 mb-24">
                <video class = "w-1/2" loop muted autoplay src="https://static.bandainamcoent.eu/video/eldenring-kf-01-animated-new.webm"></video>
                <div class = "flex flex-col text-white mt-8">
                    <p class = "text-3xl boldmedium tracking-tight py-2 px-4 pl-16 bg-[#c19d53] relative right-10">A NEW FANTASY WORLD</p>
                    <p class = "pl-16 pt-4 text-[0.920rem]">Journey through the Lands Between, a new fantasy world created by Hidetaka Miyazaki, creator of the influential DARK SOULS video game series, and George R. R. Martin, author of The New York Times best-selling fantasy series, A Song of Ice and Fire. </p>
                    <p class = "pl-16 pt-4 text-[0.920rem]">Unravel the mysteries of the Elden Ring’s power. Encounter adversaries with profound backgrounds, characters with their own unique motivations for helping or hindering your progress, and fearsome creatures. </p>
                </div>
            </div>
            <div class = "buyGame">
                
            </div>
        </div>
    </div>
</body>