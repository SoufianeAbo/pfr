<div class = "bg-black flex justify-end items-center gap-8 top-0 w-full z-50">
    <div class = "text-white flex flex-row gap-4">
        <a href="{{ route('games.index') }}" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Games</a>
        <a href="{{ route('careers.index') }}" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Careers</a>
    </div>
    <img class = "w-16 drop-shadow-md my-2 mr-4" src="{{ asset('neolinelogo.png') }}" alt="">
</div>