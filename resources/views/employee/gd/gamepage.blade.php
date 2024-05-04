@include('includes.header')

<body class="dashboard">
    @include('employee.gd.sidebarcreator')
    <div class="pt-8 w-11/12">
        @if (session('success'))
            <div class="ml-72 flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                <i class="fas fa-check mr-2"></i>
                <div>
                    <span class="font-medium">Success!</span> {{ session('success') }}
                </div>
            </div>
        @endif

        @if (session('tryagain'))
            <div class="ml-72 flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                <i class="fas fa-circle-exclamation mr-2"></i>
                <div>
                    <span class="font-medium">Error!</span> {{ session('tryagain') }}
                </div>
            </div>
        @endif

        @foreach ($errors->all() as $error)
            <div class="ml-72 flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                <i class="fas fa-circle-exclamation mr-2"></i>
                <div>
                    <span class="font-medium">Error!</span> {{ $error }}
                </div>
            </div>
        @endforeach
        <div class="ml-72">
            <p class="flex justify-end font-bold text-2xl mb-4">Welcome to your dashboard, {{
                $employee->application->firstName }}!</p>   
        </div>

        <div class = "ml-72 mt-12 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Your Game Page</h1>
            <div class = "flex flex-row justify-between">
                <div class = "pl-4 mt-4">
                    <div class = "w-fit">
                        <p class = "font-bold">Background Color</p>
                        <p class = "text-sm">Select a color...</p>
                        <input id = "bgColor" class = "w-full p" value = "#f90617" type="color">
                    </div>
                </div>
                <iframe id = "gamePageFrame" class = "w-2/3 rounded-lg" src="/games/{{ $createdGame->id }}" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</body>
<script>
    $('#bgColor').change(function() {
        let bgColorValue = document.getElementById('bgColor').value;
        $('#gamePageFrame').contents().find('.buttonBgColor').css('background-color', bgColorValue);
    });
</script>