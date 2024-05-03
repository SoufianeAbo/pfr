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
        <div class="ml-72">
            <p class="flex justify-end font-bold text-2xl mb-4">Welcome to your dashboard, {{
                $employee->application->firstName }}!</p>   
        </div>

        <div class = "ml-72">
            <div class="shadow rounded-lg flex flex-row justify-between">
                
                <div class="daisy-stat rounded-lg text-right">
                    <div class="daisy-stat-value text-2xl font-bold">{{ $createdGame->title }}</div>
                    <p>{{ $createdGame->subtitle }}</p>
                    <p class = "text-[#e20613] font-bold mt-2">{{ $createdGame->status }}</p>
                    <div class = "daisy-stats rounded-lg flex items-center">   
                        <div class = "daisy-stat">
                            <div class = "daisy-stat-figure">
                                <i class = "text-[#e20613] fas fa-users text-2xl"></i>
                            </div>
                            <p class = "font-bold">Workers</p>
                            <p class = "font-bold">239</p>
                        </div>
                        <div class = "daisy-stat">
                            <div class = "daisy-stat-figure">
                                <i class = "text-[#e20613] fas fa-spinner text-2xl"></i>
                            </div>
                            <p class = "font-bold">Game Progress</p>
                            <progress class="daisy-progress w-74" value="0" max="100"></progress>
                        </div>
                    </div>
                </div>
                
                
                <div class="daisy-stat rounded-lg" style = "background-image: linear-gradient(to left, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 1)), url({{ $createdGame->assets->gridVertical }}); background-size: cover; height: fit; background-position: 20% 20%"></div>
                
              </div>
        </div>

        <div class = "ml-72 mt-12 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Modify Game</h1>
        </div>
    </div>
</body>