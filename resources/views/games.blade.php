<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class = "bg-black flex justify-end items-center gap-8 fixed w-full z-50">
        <div class = "text-white flex flex-row gap-4">
            <a href="{{ route('games.index') }}" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Games</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">News</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Contact</a>
        </div>
        <img class = "w-16 drop-shadow-md my-2 mr-4" src="neolinelogo.png" alt="">
    </div>
    <div class = "pt-24 pl-8">
        <div class = "flex flex-row items-center gap-4 mb-8">
            <img class = "w-12 h-12 drop-shadow-md" src="neolinelogoonly.png" alt="">
            <p class = "text-[28px]">Neoline</p>
        </div>
        <div class = "toptitle pl-8">
            <img src="branddots.png" alt="">
            <p class = "text-[2.5rem]">Featured Games</p>
            <div class = "flex flex-row mt-4 gap-4">
                <div class = "hover:top-4 top-0 animate-slide-in-blurred-bottom relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/2d2a62f0f4b1f5b7c40d4324e309f39c.jpg" alt="">
                    <div class = "rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class = "absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class = "group-hover:opacity-100 opacity-0 text-white text-shadow-xl">FINAL FANTASY VII REMAKE</p>
                        <p class = "group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                        <img class = "group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                    </div>
                </div>

                <div class = "hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[150ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/b7dc60f5a597d2a0687c2c43a3cd3417.jpg" alt="">
                    <div class = "rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class = "absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class = "group-hover:opacity-100 opacity-0 text-white text-shadow-xl">ELDEN RING</p>
                        <p class = "group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                        <img class = "group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                    </div>
                </div>

                <div class = "hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[300ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/324fd03958724e32847aa8b8e35b511f.jpg" alt="">
                    <div class = "rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class = "absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class = "group-hover:opacity-100 opacity-0 text-white text-shadow-xl">SEKIRO: SHADOWS DIE TWICE</p>
                        <p class = "group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                        <img class = "group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                    </div>
                </div>

                <div class = "hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[450ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/03435e70b2d275b16191f12f3b41df2f.jpg" alt="">
                    <div class = "rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class = "absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class = "group-hover:opacity-100 opacity-0 text-white text-shadow-xl">YAKUZA 0</p>
                        <p class = "group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                        <img class = "group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                    </div>
                </div>

                <div class = "hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[600ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/54aa71911087f3b0ac9d3c45b94288ea.jpg" alt="">
                    <div class = "rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class = "absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class = "group-hover:opacity-100 opacity-0 text-white text-shadow-xl">GHOST TRICK: PHANTOM DETECTIVE</p>
                        <p class = "group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">PC (Steam), PlayStation©4</p>
                        <img class = "group-hover:opacity-100 opacity-0 w-1/6" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/ESRB_Everyone.svg/1200px-ESRB_Everyone.svg.png" alt="">
                    </div>
                </div>
             </div>
        </div>
        <div class = "toptitle pl-8 mt-24">
            <img src="branddots.png" alt="">
            <div class = "flex flex-row justify-between">
                <p class = "text-[2.5rem]">All Games</p>
                <div class = "flex flex-row items-center">
                    <div class = "flex flex-row px-4 h-min py-2 items-center border-2 border-black rounded-full">
                        <p class = "text-sm">Action</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>