<div class="fixed bg-[#0d0d0d] h-screen w-64 flex flex-col items-center justify-between z-50">
    <div class="w-full">
        <div class="w-full bg-[#000000] flex flex-row justify-center mb-4 mt-[3.8rem]">
            <img class="w-2/3 py-4" src="{{ asset('neolinelogo.png') }}" alt="">
        </div>

        <div class="w-full bg-[#000000] py-4 my-8">
            <div
                class="flex flex-row-reverse gap-4 items-center justify-center bg-gradient-to-r from-[#f90617] to-[#f91f2e] mx-4 py-2 rounded-lg">
                <img class="w-1/4 mr-2 rounded-full ring ring-white"
                    src="{{ asset('storage/' . $employee->application->picture) }}" alt="">
                <div>
                    <p class="text-white">{{ $employee->application->firstName }} {{ $employee->application->lastName }}
                    <p class = "text-white text-xs">{{ $employee->role->roleName }}</p>
                </div>
                </p>
            </div>
        </div>

        
        <div class="w-full bg-[#000000] flex flex-col gap-4 items-center py-4">
            <a href="{{ route('dashboard') }}" class="text-white p-2 px-12 rounded-full hover:scale-105 transition-all {{ Request::is('dashboard') ? 'bg-[#f91f2e]' : 'bg-[#f90617]'}}"><i
                    class="fas fa-folder-plus mr-2"></i>Your Game</a>
            <a href="{{ route('gd.workers') }}" class="text-white p-2 px-12 rounded-full hover:scale-105 transition-all {{ Request::is('dashboard/workers') ? 'bg-[#f91f2e]' : 'bg-[#f90617]'}}"><i
                    class="fa-solid fa-tags mr-2"></i>Workers</a>
            
        </div>
    </div>

    <div class="w-full bg-[#000000] flex flex-col gap-4 items-center py-4">
        <a href="{{ route('logout') }}" class="text-white p-2 px-12 rounded-full hover:scale-105 transition-all bg-[#f90617]"><i
                class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Log out</a>
    </div>
</div>