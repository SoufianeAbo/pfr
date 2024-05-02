@include('includes.header')

<body class="dashboard">
    @include('employee.gd.sidebar')
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

        <div class="ml-72 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Create Game</h1>
            <div id="alert-additional-content-5"
                class="p-4 border mx-4 mt-4 border-gray-300 rounded-lg bg-gray-50"
                role="alert">
                <div class="flex items-center">
                    <i class = "fas fa-circle-exclamation mr-2"></i>
                    <span class="sr-only">Info</span>
                    <h3 class="text-lg font-medium text-gray-800 ">Note</h3>
                </div>
                <div class="mt-2 mb-4 text-sm text-gray-800 ">
                    Creating a game project is permanent. Remember to have several meetings and discussions with your co-workers about an ambitious project to create before deciding it'd be a good idea to make a game.
                </div>
            </div>


        </div>

    </div>
</body>