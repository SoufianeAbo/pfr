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
    <div class = "pt-16">
        <div class = "toptitle flex flex-col careersbg items-center py-24">
            <p class = "text-white text-5xl">Careers</p>
            <button class = "mt-4 text-white border-2 px-4 py-2 rounded-full transition-all hover:bg-[#e20613] hover:text-black hover:border-[#e20613]">View Job Openings</button>
        </div>
    </div>
    <div class = "pl-24 pt-12 flex flex-row items-center gap-8">
        <img class = "object-fill" src="https://www.simplon.ma/theme/medias/thumbs/youcode-1_x500.jpg" alt="">
        <div class = "flex flex-col items-start w-1/2">
            <img class = "object-none" src="branddots.png" alt="">
            <p class = "text-[2.5rem] boldfour">Who We Are</p>
            <p>Bandai Namco exists to share dreams, fun and inspiration with people around the world. 
                Connecting people and societies in the enjoyment of uniquely entertaining products and
                services, we're working to create a brighter future for everyone.</p>
        </div>
    </div>
    <p class = "px-24 mt-12"><iframe class = "rounded-lg" width="100%" height="520px" src="https://www.youtube.com/embed/3-hiA18Lrvw" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe></p>
</body>