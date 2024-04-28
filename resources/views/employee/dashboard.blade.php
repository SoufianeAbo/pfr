@include('includes.header')

<body class="dashboard">
    <div class="fixed bg-[#0d0d0d] h-screen w-64 flex flex-col items-center justify-between z-50">
        <div class="w-full">
            <div class="w-full bg-[#000000] flex flex-row justify-center mb-4 mt-[3.8rem]">
                <img class="w-2/3 py-4" src="{{ asset('neolinelogo.png') }}" alt="">
            </div>

            <div class="w-full bg-[#000000] py-4 my-8">
                <div
                    class="flex flex-row-reverse gap-4 items-center justify-center bg-gradient-to-r from-[#f90617] to-[#f91f2e] mx-4 py-2 rounded-lg">
                    <img class="w-1/4 rounded-full ring ring-white"
                        src="https://cdn2.iconfinder.com/data/icons/audio-16/96/user_avatar_profile_login_button_account_member-512.png"
                        alt="">
                    <p class="text-white">Administrator</p>
                </div>
            </div>

            <div class="w-full bg-[#000000] flex flex-col gap-4 items-center py-4">
                <a href="#" class="text-white p-2 px-12 rounded-full bg-[#f91f2e]"><i
                        class="fa-solid fa-chart-line mr-2"></i>Dashboard</a>
                <a href="#" class="text-white p-2 px-12 rounded-full bg-[#f90617]"><i
                        class="fa-solid fa-bars-progress mr-2"></i>Projects</a>
                <a href="#" class="text-white p-2 px-12 rounded-full bg-[#f90617]"><i
                        class="fa-solid fa-address-book mr-2"></i>Tasks</a>
            </div>
        </div>

        <div class="w-full bg-[#000000] flex flex-col gap-4 items-center py-4">
            <a href="#" class="text-white p-2 px-12 rounded-full bg-[#f90617]"><i
                    class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Log out</a>
        </div>
    </div>
    <!-- <div class = "bg-[#000000] flex flex-row justify-end py-2 w-full px-2 fixed">
        <img class = "w-[2%] rounded-full ring-2 ring-[#7c030b]" src="https://cdn-icons-png.flaticon.com/512/3177/3177440.png" alt="">
    </div> -->
    <div class="pt-8 w-11/12">
        <div class="ml-72 bg-neutral-100 rounded-lg h-screen">
            <h1 class="text-3xl font-bold pt-8 pl-4">Applications</h1>
            <div class="flex flex-row gap-4 mx-4 pt-8">
                <div class="daisy-card w-96 bg-base-100 shadow-xl">
                    <div class="daisy-card-body">
                        <div class="flex flex-row justify-between">
                            <h2 class="daisy-card-title">Souf Abo</h2>
                            <div class="daisy-avatar">
                                <div class="w-12 rounded-full">
                                    <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                </div>
                            </div>
                        </div>
                        <p class = "text-sm"><b>Applied Role:</b> Artist</p>
                        <p class = "text-sm"><b>Source:</b> Artist</p>
                        <p class = "text-sm"><b>Date Applied:</b> Artist</p>
                        <div class="daisy-card-actions justify-end">
                            <button onclick="my_modal_1.showModal()" class="bg-[#f90617] px-4 py-2 rounded-lg text-white">Details</button>
                            <dialog id="my_modal_1" class="daisy-modal">
                            <div class="daisy-modal-box">
                                <div class = "flex flex-row items-center justify-between">
                                    <h3 class="font-bold text-5xl">Soufiane Abounasr</h3>
                                    <div class="daisy-avatar">
                                        <div class="w-24 rounded-full">
                                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-4 pb"><b>First Name:</b> Soufiane</p>
                                <p class="py"><b>Last Name:</b> Abounasr</p>
                                <p class="py"><b>Email:</b> testinglol@mail.com</p>
                                <p class="py"><b>Phone:</b> +1 (908) 106-4095</p>
                                <p class="py"><b>City:</b> Aut rescunande</p>
                                <p class="py"><b>Cover Letter:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                <p class="py"><b>Resume/CV:</b><em class = "text-xs text-blue-500 underline"> Download here</em></p>
                                <p class="py"><b>Country:</b> Morocco</p>
                                <p class="py"><b>LinkedIn Profile:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                <p class="py"><b>Portfolio:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                <p class="py"><b>Salary Expectation:</b>too high$</p>
                                <p class="py-4"><b>Position:</b> Artist</p>
                                <div class="daisy-modal-action">
                                <form method="dialog">
                                    <button class="btn">Close</button>
                                </form>
                                </div>
                            </div>
                            </dialog>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>