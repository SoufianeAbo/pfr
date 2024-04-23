@include('includes.header')
<body class = "dashboard">
    <div class = "fixed bg-[#c70512] h-screen w-64 flex flex-col items-center justify-between">
        <div class = "w-full">
            <div class = "w-full bg-[#ae0410] flex flex-row justify-center mb-4 mt-[3.8rem]">
                <img class = "w-2/3 py-4" src="{{ asset('neolinelogo.png') }}" alt="">
            </div>

            <div class = "w-full bg-[#ae0410] flex flex-col gap-4 items-center py-4">
                <a href = "#" class = "text-white p-2 px-12 rounded-full bg-[#f91f2e]"><i class="fa-solid fa-chart-line mr-2"></i>Dashboard</a>
                <a href = "#" class = "text-white p-2 px-12 rounded-full bg-[#f90617]"><i class="fa-solid fa-bars-progress mr-2"></i>Projects</a>
                <a href = "#" class = "text-white p-2 px-12 rounded-full bg-[#f90617]"><i class="fa-solid fa-address-book mr-2"></i>Tasks</a>
            </div>
        </div>
        
        <div class = "w-full bg-[#ae0410] flex flex-col gap-4 items-center py-4">
            <a href = "#" class = "text-white p-2 px-12 rounded-full bg-[#f90617]"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Log out</a>
        </div>
    </div>
    <div class = "bg-[#e20613] flex flex-row justify-end py-2 w-full px-2 fixed">
        <img class = "w-[3%] rounded-full ring-2 ring-[#7c030b]" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="">
    </div>
</body>