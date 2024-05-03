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
                @if ($firstExt == 'http')
                    <div class="daisy-stat rounded-lg" style = "background-image: linear-gradient(to left, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 1)), url({{ $createdGame->assets->gridVertical }}); background-size: cover; height: fit; background-position: 20% 20%"></div>
                @else
                    <div class="daisy-stat rounded-lg" style = "background-image: linear-gradient(to left, rgba(255, 255, 255, 0) 70%, rgba(255, 255, 255, 1)), url({{ asset('storage/' . $createdGame->assets->gridVertical) }}); background-size: cover; height: fit; background-position: 20% 20%"></div>
                @endif
              </div>
        </div>

        <div class = "ml-72 mt-12 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Modify Game</h1>
            <div class = "flex flex-row justify-between gap-20">
                <form enctype="multipart/form-data" action = "{{ route('edit.game') }}" method = "POST" class = "flex flex-row justify-between gap-20 w-full">
                @csrf
                    <div class = "ml-4 flex-col w-full">
                        <h2 class="text-xl font-bold pt-8">Game Details</h2>
                        <input name = "gameID" type="text" class = "hidden" value = "{{ $createdGame->id }}">
                        <input name = "creatorID" type="text" class = "hidden" value = "{{ $employee->id }}">

                        <p class = "mt-2 font-bold">Game Title</p>
                        <input value = "{{ $createdGame->title }}" required name = "gameTitle" placeholder = "Title..." type="text" class = "p-2 rounded-lg border-2 w-full">
        
                        <p class = "mt-2 font-bold">Game Subtitle</p>
                        <textarea required name = "gameSubtitle" placeholder = "Subtitle..." type="text" class = "p-2 rounded-lg border-2 w-full resize-none">{{ $createdGame->subtitle }}</textarea>

                        <p class = "mt-2 font-bold">Release Date</p>
                        <input value = "{{ $createdGame->releaseDate }}" required name = "releaseDate" type="date" class = "p-2 rounded-lg border-2 w-full">
                        
                        <p class = "mt-2 font-bold">Genre</p>
                        <select required name="genreID" class = "p-2 rounded-lg border-2 w-full">
                            @foreach ($genres as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                            @endforeach
                        </select>

                        <p class = "mt-2 font-bold">Developer</p>
                        <input value = "{{ $createdGame->developer }}" required name = "gameDeveloper" placeholder = "Developer..." type="text" class = "p-2 rounded-lg border-2 w-full">

                        <div class = "bg-white rounded-lg mt-4 p-4">
                            <p class = "font-bold text-xl">Game Status</p>
                            <div class="daisy-form-control w-fit">
                                <label class="daisy-label cursor-pointer">
                                  <span>In Development</span> 
                                  <input value = "In Development" type="radio" name="gameStatus" class="ml-2 daisy-radio checked:bg-red-500" checked />
                                </label>
                            </div>
                            <div class="daisy-form-control w-fit">
                                <label class="daisy-label cursor-pointer">
                                    <span>Teaser</span> 
                                    <input value = "Teaser" type="radio" name="gameStatus" class="ml-2 daisy-radio checked:bg-gray-500" checked />
                                </label>
                            </div>
                            <div class="daisy-form-control w-fit">
                                <label class="daisy-label cursor-pointer">
                                    <span>Released</span> 
                                    <input value = "Released" type="radio" name="gameStatus" class="ml-2 daisy-radio checked:bg-green-500" checked />
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class = "mr-8 flex-col text-right">
                        <h2 class="text-xl font-bold pt-8">Game Pictures</h2>
                        <div class="daisy-avatar mt-4">
                            <label for = "dropzone-file" class="cursor-pointer w-[267px] group h-[400px] rounded-lg border-2 border-black">
                                <input name = "file" id = "dropzone-file" type="file" class = "hidden w-full h-full absolute top-0 bottom-0 left-0 right-0">
                                <input name = "fileAPI" id = "api-file" class = "hidden" type="text">
                                <div class = "flex items-center justify-center group-hover:opacity-50 transition-all opacity-0 w-full h-full absolute top-0 left-0 right-0 bottom-0 bg-black rounded-lg"></div>
                                <p class = "rounded-lg opacity-0 group-hover:opacity-90 font-bold flex-col transition-all w-full h-full absolute top-0 right-0 bottom-0 left-0 flex items-center justify-center text-white text-xl text-center">
                                    Upload picture...<br><span class = "font-light text-sm">Picture must at least be 267x400.</span>
                                </p>
                                @if ($firstExt !== 'http')
                                    <img class = "rounded-lg" src="{{ asset('storage/' . $createdGame->assets->gridVertical) }}" />
                                @else
                                    <img class = "rounded-lg" src="{{ $createdGame->assets->gridVertical }}" alt="">
                                @endif
                            </label>
                        </div>
                        <p class = "text-center text-xs opacity-50 my-2">-- or --</p>
                        <label for = "my_modal" class = "text-center flex justify-center px-4 py-2 bg-[#f90617] rounded-lg text-white hover:scale-105 transition-all cursor-pointer">Select from API</label>
                        <button class = "bg-[#f90617] px-4 py-2 rounded-lg text-white hover:scale-105 transition-all mt-2">Modify Game</button>
                        <input type="checkbox" id = "my_modal" class = "daisy-modal-toggle" />
                        <div class = "text-left daisy-modal" role = "dialog">
                            <div class = "daisy-modal-box">
                                <h3 class="text-lg font-bold">Get image with API</h3>
                                <p class="py-4">Search for the name of any game.</p>
                                <input value = "{{ $createdGame->title }}" id = "searchInput" placeholder = "Input title..." type="text" class = "w-full p-2 rounded-lg border-2">
                                <div id = "searchResults" class = "grid grid-cols-3 gap-4">
                                    
                                </div>
                                <div class = "daisy-modal-action">
                                    <label for="my_modal" class="px-4 py-2 bg-[#f90617] rounded-lg text-white cursor-pointer">Close</label>
                                </div>
                            </div>
                            <label class="daisy-modal-backdrop" for="my_modal">Close</label>
                        </div>
                    </div>
                </form>
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

        const fileAPI = document.getElementById('api-file');
        fileAPI.value = null;
    });

    function uploadFile(url) {
        const imgElement = document.querySelector('.daisy-avatar img');
        imgElement.src = url;   

        const uploadedFile = document.getElementById('dropzone-file');
        uploadedFile.value = null;
        
        const fileAPI = document.getElementById('api-file');
        fileAPI.value = url;
    }

    $(document).ready(function(){
        function executeAjax(query) {
            if (query.length >= 3) {
                $.ajax({
                    url: "{{ route('searchSGD') }}",
                    method: 'GET',
                    data: { query: query },
                    success: function(response){
                        $('#searchResults').empty();
                        $.each(response, function(index, result){
                            $('#searchResults').append(`<img onClick = "uploadFile('${result.url}')" src = ${result.url} class = 'rounded-lg border border-black mt-4 hover:scale-105 transition-all'} />`);
                        });
                    }
                });
            }
        }
        executeAjax($('#searchInput').val());

        $('#searchInput').on('input', function(){
            var query = $(this).val();
            executeAjax(query);
        });
    });
</script>