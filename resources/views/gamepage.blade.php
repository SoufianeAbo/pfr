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
        </div>
    </div>
    <div class = "gameBg w-full flex flex-col items-center pb-8">
        <div class = "flex flex-col items-center pt-8 w-[55%] text-center text-white">
            <img class = "pb-16" src="https://static.bandainamcoent.eu/high/elden-ring/elden-ring/00-page-setup/elden-ring-border-leaf.png" alt="">
            <p class = "text-[#c19d53] text-4xl boldfour pb-8">Tarnished of the Lands Between</p>
            <div class = "text-[0.975rem] tracking-tight flex flex-col gap-4">
                <p>The Golden Order has been shattered. Throughout the Lands Between, Demigods holding shards of the Elden Ring squabble and make war over the ruins of a perfect realm, now abandoned by the golden guidance of the Greater Will.</p>
                <p>As the echoes of this conflict thunder in the distance, an outcast arrives. Once, their ancestors called the Lands Between home, but the blessed light of grace was lost to their tribe long ago and they were expelled from the kingdom. They are the Tarnished, and they have returned to claim the Elden Lordship promised to them by legend.</p>
                <p>This is the world of ELDEN RING. As a Tarnished, the Lands Between await your exploration. You will ride through the vast fields, gallop over rolling hills, and leap to the top of rocky crags on your ephemeral steed, revealing a world teeming with life and danger.</p>
                <p>In the grand fields where your journey begins, mythic creatures prowl the veldts, ineffable horrors lurk in the bogs and marshes, and all manner of soldiers and itinerant warriors are waiting for those who wander unawares. Shy creatures nibble on sweet grasses or scuttle through the underbrush.</p>
                <p>Those few inhabitants who are not mad or hostile linger near the broken remnants of cities left behind by the Shattering. They may have answers for you, if you help them. Above them all, ensconced in vast legacies bristling with traps, secrets, and guardians, the Demigods – warped Lords who began as members of a royal and noble family – rule their domains with the unyielding power granted by shards of the Elden Ring.</p>
            </div>
            <img class = "pt-16 pb-8" src="https://static.bandainamcoent.eu/high/elden-ring/elden-ring/00-page-setup/elden-ring-border-leaf.png" alt="">
        </div>
        <div class = "flex flex-row justify-around">
            <img class = "w-[30%] hover:scale-105 transition-all" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/02-screenshots/ELDENRING_12_4K.jpg?twic=v1/resize=550/step=10/quality=80" alt="">
            <img class = "w-[30%] hover:scale-105 transition-all" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/02-screenshots/ELDENRING_05_4K.jpg?twic=v1/resize=550/step=10/quality=80" alt="">
            <img class = "w-[30%] hover:scale-105 transition-all" src="https://p325k7wa.twic.pics/high/elden-ring/elden-ring/02-screenshots/ELDENRING_08_4K.jpg?twic=v1/resize=550/step=10/quality=80" alt="">
        </div>
        <img class = "pt-16 pb-8 w-[55%]" src="https://static.bandainamcoent.eu/high/elden-ring/elden-ring/00-page-setup/elden-ring-border-leaf.png" alt="">
        <div class = "w-[55%] text-center text-white text-[0.975rem] tracking-tight flex flex-col gap-4">
            <p>The guidance of lost graces – should you find them - will put you on a road to re-take these lands from the Demigods through might and magic, but you need not follow their path.</p>
            <p>The choice is yours. Do you crave power, or do you seek understanding? Decide for yourself, then build your character as you see fit.</p>
            <p>Try dozens of skills and find one to best suit your style. Practice stealth to avoid danger or catch enemies unaware. Use the environment, 
                the weather, and the time of day to gain an advantage. Learn the art of combat , where you must read your enemy’s intentions and a well-timed dodge
                or parry could be the difference between life and death. Ride your steed into battle against mounted mercenaries and cut them from their horses.
                Master arcane spells from the masters that still linger among the ruins of the war. Summon familiar spirits to even the odds against you or call
                on your fellow Tarnished to fight at your side and share the burden as you explore. Or, delve into the complex, bloody history of the Shattering
                and discover the lost secrets of the Demigods and their kin. All these paths are possible, and more.</p>
            <p>Ultimately, your journey will be defined by the strength of your own ambition. The greater your goals, the greater the challenge will be. Should you choose to claim the Lands Between as your birthright then yes, you must fight.</p>
            <div class = "flex flex-col gap-4 boldmedium">
                <p>And yes, you may die.</p>
                <p>But you will return to fight again.</p>
                <p>For that is how a champion – or a Lord – is born.</p>
            </div>
        </div>
        <img class = "my-12" src="https://static.bandainamcoent.eu/high/elden-ring/elden-ring/00-page-setup/Elden-ring-ornament-icon-feather-two.png" alt="">
        <p class = "my-12 self-start text-white text-4xl boldfour pl-24">System requirements :</p>
        <div class = "flex flex-row w-full pl-24 gap-8">
            <div class = "flex flex-col">
                <p class = "text-xl text-white">Minimum</p>
                <div class = "border border-white px-6 py-4 mt-4">
                    <ul class = "list-disc nobold text-white">
                        <li>OS: Windows 10</li>
                        <li>Processor: Intel Core i5-8400 | AMD RYZEN 3 3300X</li>
                        <li>Memory: 12 GB RAM</li>
                        <li>Graphics: Nvidia GeForce GTX 1060, 3 GB | AMD Radeon RX 580, 4 GB</li>
                        <li>DirectX: Version 12 (Feature Level 12.0)</li>
                        <li>Storage: 60 GB available space</li>
                        <li>Sound Card: Windows-Compatible Audio device</li>
                    </ul>
                    <p class = "mt-12 italic text-white">Current specs are valid for launch day and may be updated in the future.</p>
                </div>
            </div>
            <div class = "flex flex-col">
                <p class = "text-xl text-white">Recommended</p>
                <div class = "border border-white px-6 py-4 mt-4">
                    <ul class = "list-disc nobold text-white">
                        <li>OS: Windows 10</li>
                        <li>Processor: Intel Core i5-8400 | AMD RYZEN 3 3300X</li>
                        <li>Memory: 12 GB RAM</li>
                        <li>Graphics: Nvidia GeForce GTX 1060, 3 GB | AMD Radeon RX 580, 4 GB</li>
                        <li>DirectX: Version 12 (Feature Level 12.0)</li>
                        <li>Storage: 60 GB available space</li>
                        <li>Sound Card: Windows-Compatible Audio device</li>
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