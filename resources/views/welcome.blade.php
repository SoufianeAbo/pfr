<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<style>
@font-face {
    font-family: 'Gotham';
    font-weight: 200;
    src: url('/fonts/Gotham-Book.otf') format('opentype');
}

@font-face {
    font-family: 'Gotham';
    font-weight: 300;
    src: url('/fonts/Gotham-Medium.otf') format('opentype');
}

@font-face {
    font-family: 'Gotham';
    font-weight: 400;
    src: url('/fonts/Gotham-Bold.otf') format('opentype');
}

p {
    font-family: Gotham;
    font-weight: 200;
}

.toptitle p {
    font-weight: 400;
}

.imgclip {
    clip-path: polygon(0 0, 75% 0, 100% 100%, 25% 100%);
}

#game1, #game2, #game3 {
    height: 50rem;
    width: 100%;
    background-size: cover;
}

#game3 {
    height: 30rem;
}

#game1 p, #game2 p, #game3 p {
    font-weight: 400;
}

button {
    font-family: 'Gotham';
    font-weight: 400;
}

#game1 {
    background-image: url("https://preview.redd.it/3daagjald2dy.jpg?auto=webp&s=0a75177e001eb9a3e3c78c16dca332e20e9737f8");
}

#game2 {
    background-image: url("https://static.bandainamcoent.eu/high/elden-ring/elden-ring/02-screenshots/EldenRing_Screen.png");
}

#game3 {
    background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0), rgba(0, 0, 0, 1)), url("https://www.gematsu.com/wp-content/uploads/2022/04/Game-Page-Featured_Kingdom-Hearts-4-Inits.jpg");
}

#caroGame1 {
    background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0), rgba(0, 0, 0, 1)), url("https://expertgamereviews.com/wp-content/uploads/2021/07/Zelda-BotW-DLC-Feature-1280x720.jpg");
}

#caroGame2 {
    background-image: linear-gradient(to bottom, rgba(245, 246, 252, 0), rgba(0, 0, 0, 1)), url("https://www.psu.com/wp/wp-content/uploads/2019/03/Sekiro-shadows-die-twice-cover.jpg");
}

.logo p {
    font-weight: 200 !important;
}

.footer p {
    font-weight: 300 !important;
}

</style>
<body>
    <div class = "bg-black flex justify-end items-center gap-8 fixed w-full z-50">
        <div class = "text-white flex flex-row gap-4">
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Games</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">News</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Contact</a>
        </div>
        <img class = "w-16 drop-shadow-md my-2 mr-4" src="neolinelogo.png" alt="">
    </div>
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
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[250ms] md:animate-slide-top delay-75 absolute top-8 right-[0%] md:right-[22%] h-20% imgclip w-[50%] md:w-[20%] mr-24" src="https://cdn2.steamgriddb.com/thumb/812de5bb5b057f52381805d762962e80.jpg" alt="">
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[500ms] md:animate-slide-top absolute top-0 right-[15%] md:right-[12%] h-20% imgclip w-[50%] md:w-[20%] mr-24" src="https://cdn2.steamgriddb.com/thumb/b7dc60f5a597d2a0687c2c43a3cd3417.jpg" alt="">
                <img class = "drop-shadow-md hover:paused hover:brightness-150 transition-all brightness-100 md:animation-delay-[700ms] md:animate-slide-top absolute top-16 right-[30%] md:right-0 h-20% imgclip w-[50%] md:w-[20%] mr-24" src="https://cdn2.steamgriddb.com/thumb/0ca86f4675b000cbd75d1a06012da467.jpg" alt="">
            </div>
        </div>
    </div>
    <div id = "game1">
        <div class = "flex justify-end">
            <div class = "flex flex-col gap-8 text-2xl mr-8">
                <div class = "bg-white p-8 rounded-lg text-[#e20613] mt-48 w-96 flex flex-row gap-8">
                    <img class = "w-1/4 border-2 rounded hover:scale-150 transition-all border-[#e20613]" src="https://cdn2.steamgriddb.com/thumb/bc74aefc1eaebfb880955bc0c6a8cac5.jpg" alt="">
                    <p>FINAL FANTASY 7 REMAKE</p>
                </div>

                <div class = "bg-white p-8 rounded-lg text-3xl text-black w-96">
                    <p>Uncover a new chapter in the FINAL FANTASY saga</p>
                    <button class = "btn border border-[#e20613] hover:text-[#e20613] hover:bg-white transition-all text-xs tracking-widest bg-[#e20613] text-white p-8 w-full mt-4 rounded-lg">BUY NOW</button>
                </div>
            </div>
        </div>
    </div>
    <div id = "game2">
        <div class = "flex justify-end">
            <div class = "flex flex-col gap-8 text-2xl mr-8">
                <div class = "bg-white p-8 rounded-lg text-[#e20613] mt-48 w-96 flex flex-row gap-8">
                    <img class = "w-1/4 border-2 rounded hover:scale-150 transition-all border-[#e20613]" src="https://cdn2.steamgriddb.com/thumb/b677845905ccd63299c86ae6bfcff423.jpg" alt="">
                    <p>ELDEN RING</p>
                </div>

                <div class = "bg-white p-8 rounded-lg text-3xl text-black w-96">
                    <p>Explore the massive world of ELDEN RING</p>
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
        <div class = "bg-black p-8">
            <div class = "flex flex-row text-white logo items-start justify-between">
                <div class = "flex flex-row items-center gap-4">
                    <img class = "w-16" src="neolinewhiteonly.png" alt="">
                    <p class = "text-xl">Neoline</p>
                </div>

                <div class = "flex flex-col gap-4">
                    <p>Games</p>
                    <p>Careers</p>
                    <p>News</p>
                    <p>Login</p>
                </div>

                <div class = "flex flex-col footer w-1/2">
                    <p class = "text-sm tracking-wider w-fit">Our partners</p>
                    <div class = "flex flex-row w-full gap-4 items-center">
                        <img class = "w-1/6 h-full" src="steamlogo.png" alt="">
                        <img class = "w-1/12" src="https://fineproxy.org/wp-content/uploads/2023/08/Epic-Games-logo.png" alt="">
                        <img class = "w-1/6" src="https://www.storylandstudios.com/wp-content/uploads/2022/01/Ubisoft-Horizontal-Logo-WHITE_1.png" alt="">
                        <img class = "w-1/12" src="https://vgboxart.com/resources/logo/12498_ea-white-prev.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class = "bg-[#e20613] footer">
            <p class = "text-white p-4 text-sm tracking-wider">© 2010 - 2024 Neoline LLC</p>
        </div>
    </div>
</body>
</html>