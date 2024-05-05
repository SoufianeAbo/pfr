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

                    <div class = "w-fit mt-4">
                        <p class = "font-bold">Small Game Logo</p>
                        <input id = "file" type="file">
                        <input name = "fileAPI" id = "api-file" class = "hidden" type="text">
                        <p class = "text-center text-xs opacity-50">-- or --</p>
                        <label class = "px-4 py-2 bg-[#e20613] text-white rounded-lg cursor-pointer" for="my_modal">Select from API</label>
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

                    <div class = "w-fit mt-4">
                        <p class = "font-bold">Page Picture</p>
                        <input id = "file-page" type="file">
                        <input name = "fileAPI-page" id = "api-file" class = "hidden" type="text">
                        <p class = "text-center text-xs opacity-50">-- or --</p>
                        <label class = "px-4 py-2 bg-[#e20613] text-white rounded-lg cursor-pointer" for="my_modal2">Select from API</label>
                        <input type="checkbox" id = "my_modal2" class = "daisy-modal-toggle" />
                        <div class = "text-left daisy-modal" role = "dialog">
                            <div class = "daisy-modal-box">
                                <h3 class="text-lg font-bold">Get image with API</h3>
                                <p class="py-4">Search for the name of any game.</p>
                                <input value = "{{ $createdGame->title }}" id = "searchInput-page" placeholder = "Input title..." type="text" class = "w-full p-2 rounded-lg border-2">
                                <div id = "searchResults-page" class = "grid grid-cols-3 gap-4">
                                    
                                </div>
                                <div class = "daisy-modal-action">
                                    <label for="my_modal2" class="px-4 py-2 bg-[#f90617] rounded-lg text-white cursor-pointer">Close</label>
                                </div>
                            </div>
                            <label class="daisy-modal-backdrop" for="my_modal">Close</label>
                        </div>
                    </div>
                </div>
                <iframe id = "gamePageFrame" class = "w-2/3 rounded-lg" src="/games/{{ $createdGame->id }}" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</body>
<script>
    $('#bgColor').on('input', function() {
        let bgColorValue = document.getElementById('bgColor').value;
        $('#gamePageFrame').contents().find('.buttonBgColor').css('background-color', bgColorValue);
        $('#gamePageFrame').contents().find('.borderBgColor').css('border-color', bgColorValue);
    });

    document.getElementById('file').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const imgElement = document.querySelector('.daisy-avatar img');
                $('#gamePageFrame').contents().find('#img').attr('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }

        const fileAPI = document.getElementById('api-file');
        fileAPI.value = null;
    });

    function uploadFile(url) {
        const imgElement = document.querySelector('.daisy-avatar img');
        $('#gamePageFrame').contents().find('#img').attr('src', url);

        const uploadedFile = document.getElementById('file');
        uploadedFile.value = null;
        
        const fileAPI = document.getElementById('api-file');
        fileAPI.value = url;
    }

    $(document).ready(function(){
        function executeAjax(query) {
            if (query.length >= 3) {
                $.ajax({
                    url: "{{ route('searchSGDLogo') }}",
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

    document.getElementById('file-page').addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                const imgElement = document.querySelector('.daisy-avatar img');
                $('#gamePageFrame').contents().find('#img').attr('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }

        const fileAPI = document.getElementById('api-file-page');
        fileAPI.value = null;
    });

    function uploadFilePage(url) {
        const imgElement = document.querySelector('.daisy-avatar img');
        $('#gamePageFrame').contents().find('#img').attr('src', url);

        const uploadedFile = document.getElementById('file-page');
        uploadedFile.value = null;
        
        const fileAPI = document.getElementById('api-file-page');
        fileAPI.value = url;
    }

    $(document).ready(function(){
        function executeAjax(query) {
            if (query.length >= 3) {
                $.ajax({
                    url: "{{ route('searchSGDPage') }}",
                    method: 'GET',
                    data: { query: query },
                    success: function(response){
                        $('#searchResults-page').empty();
                        $.each(response, function(index, result){
                            $('#searchResults-page').append(`<img onClick = "uploadFilePage('${result.url}')" src = ${result.url} class = 'rounded-lg border border-black mt-4 hover:scale-105 transition-all'} />`);
                        });
                    }
                });
            }
        }
        executeAjax($('#searchInput-page').val());

        $('#searchInput-page').on('input', function(){
            var query = $(this).val();
            executeAjax(query);
        });
    });
</script>