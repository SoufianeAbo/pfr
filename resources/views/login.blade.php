@include('includes.header')
<body class = "loginpage">
    <div class = "bg-[#E6E6E6] py-2 flex flex-col items-center">
        <div class = "w-1/2 flex flex-row justify-between">
            <p class = "flex flex-row items-center">
                <span class = "text-[#e20613] text-xl mr-4"><i class="fa-solid fa-triangle-exclamation"></i></span>
            This is an employees only area. If you're not an employee, head out to our home page.</p>
            <a href="{{ route('home.index') }}" class = "bg-black text-white px-12 rounded-full py-3">Home</a>
        </div>
    </div>
    <div class = "flex flex-row w-full">
        <div class = "bg-white px-4 py-2 flex flex-col w-full justify-between">
            <div class = "w-1/12">
                <img src="{{ asset('neolinelogoblack.png') }}" alt="">
            </div>

            <div class = "w-[50%] flex flex-col self-center items-center gap-4">
                <img class = "w-[40%]" src="{{ asset('neolinelogoblack.png') }}" alt="">
                <h1 class = "text-2xl font-bold">Login</h1>
                <p>Log in with your Neoline Employee ID account.</p>
                <form action = "{{ route('employee.login') }}" method = "POST" class = "w-full flex flex-col gap-2">
                    @csrf
                    <input name = "email" placeholder = "E-mail address..." class = "placeholder-gray-600 w-full border-2 rounded-lg px-2 py-2 border-gray-700" type="text">
                    <input name = "password" placeholder = "Password..." class = "placeholder-gray-600 w-full border-2 rounded-lg px-2 py-2 border-gray-700" type="password">
                    <button type = "submit" class = "font-light w-full bg-[#e20613] px-4 py-4 rounded-full text-white">Submit</button>
                </form>
            </div>

            <div class = "text-sm px-4 pb-8">
                <p>Neoline Employee ID is operated by Neoline Studios. (“NSEI”) with support from Neoline Studios LLC. (“NSEI”). Any use of your personal information by Neoline Employee ID is subject to the NSEI Privacy Policy. NSEI’s access to and use of such information will be subject to and consistent with that privacy policy and the NSEI Privacy Policy.</p>
            </div>
        </div>
        <div class = "loginbg w-screen h-screen flex flex-col justify-end">
            <div class = "bg-black bg-opacity-50 h-1/2">
                <div class = "flex flex-col items-center py-8">
                    <p class = "text-white text-[1.1rem]">Neoline Employee Hub</p>
                    <p class = "text-white boldify text-4xl mt-4 w-2/3 text-center boldify">Neoline Employee Hub allows you to check all your tasks for the day.</p>
                </div>
            </div>
        </div>
    </div>
</body>