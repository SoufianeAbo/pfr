@include('includes.header')
<body class = "flex flex-col justify-between h-screen">
    @include('includes.navbar')
    <div class = "w-full flex justify-center pt-48">
        <div class = "w-1/2 flex flex-col gap-8 justify-center items-center">
            <h1 class = "text-6xl font-bold">Thank You!</h1>
            <p class = "text-center">Your application has been sent. 
                You will receive a response from our HR team eventually.
                Feel free to keep navigating our awesome games in the meanwhile!</p>
            
            <a href = "{{ route('home.index') }}" class = "bg-[#e20613] px-8 py-4 rounded-lg text-white">HOME PAGE</a>
        </div>
    </div>
    @include('includes.footer')
</body>