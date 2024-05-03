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
            <div class = "flex flex-row justify-between gap-20">
                <div class = "ml-4 flex-col w-full">
                    <h2 class="text-xl font-bold pt-8">Game Details</h2>
                    <p class = "mt-2 font-bold">Game Title</p>
                    <input placeholder = "Title..." type="text" class = "p-2 rounded-lg border-2 w-full">
    
                    <p class = "mt-2 font-bold">Game Subtitle</p>
                    <textarea placeholder = "Subtitle..." type="text" class = "p-2 rounded-lg border-2 w-full resize-none"></textarea>

                    <p class = "mt-2 font-bold">Release Date</p>
                    <input type="date" class = "p-2 rounded-lg border-2 w-full">
                    
                    <p class = "mt-2 font-bold">Genre</p>
                    <select name="genre" class = "p-2 rounded-lg border-2 w-full">
                        @foreach ($genres as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                        @endforeach
                    </select>

                    <p class = "mt-2 font-bold">Developer</p>
                    <input placeholder = "Developer..." type="text" class = "p-2 rounded-lg border-2 w-full">
                </div>
                <div class = "mr-8 flex-col text-right">
                    <h2 class="text-xl font-bold pt-8">Game Pictures</h2>
                    <div class="daisy-avatar mt-4">
                        <label for = "dropzone-file" class="cursor-pointer w-[267px] group h-[400px] rounded-lg border-2 border-black">
                            <input id = "dropzone-file" type="file" class = "hidden w-full h-full absolute top-0 bottom-0 left-0 right-0">
                            <div class = "flex items-center justify-center group-hover:opacity-50 transition-all opacity-0 w-full h-full absolute top-0 left-0 right-0 bottom-0 bg-black rounded-lg"></div>
                            <p class = "rounded-lg opacity-0 group-hover:opacity-90 font-bold flex-col transition-all w-full h-full absolute top-0 right-0 bottom-0 left-0 flex items-center justify-center text-white text-xl text-center">
                                Upload picture...<br><span class = "font-light text-sm">Picture must at least be 267x400.</span>
                            </p>
                            <img class = "rounded-lg" src="https://cdn2.steamgriddb.com/thumb/2d2a62f0f4b1f5b7c40d4324e309f39c.jpg" />
                        </label>
                    </div>
                    <p class = "text-center text-xs opacity-50 my-2">-- or --</p>
                    <a class = "text-center flex justify-center px-4 py-2 bg-[#f90617] rounded-lg text-white hover:scale-105 transition-all" href="">Select from API</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    document.getElementById('dropzone-file').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const imgElement = document.querySelector('.daisy-avatar img');
                imgElement.src = event.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
</script>