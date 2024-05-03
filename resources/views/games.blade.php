@include('includes.header')
<body>
    @include('includes.navbar')
    <div class="pt-24 pl-8 mb-8">
        <div class="flex flex-row items-center gap-4 mb-8">
            <img class="w-12 h-12 drop-shadow-md" src="neolinelogoonly.png" alt="">
            <p class="text-[28px]">Neoline</p>
        </div>
        <div class="toptitle pl-8">
            <img src="branddots.png" alt="">
            <p class="text-[2.5rem]">Featured Games</p>
            <div class="flex flex-row mt-4 gap-4">
                @foreach($featured as $key=>$game)
                @php
                    $delay = ($key + 1) * 150;
                @endphp
                <a href = "/games/{{ $game->id }}" class="hover:top-4 top-0 animate-slide-in-blurred-bottom animation-delay-[{{ $delay }}ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                    <img class="rounded-lg" src="{{ $game->assets->gridVertical }}" alt="">
                    <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                    <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                        <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl uppercase">{{ $game->title }}</p>
                        <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">
                            @foreach($game->platforms as $platform)
                                @if ($loop->iteration != $loop->last)
                                    {{ $platform->platform->name }},
                                @else
                                    {{ $platform->platform->name }}
                                @endif
                            @endforeach
                        </p>
                        <img class="group-hover:opacity-100 opacity-0 w-1/6" src="{{ asset('esrb/' . $game->esrb . '.png') }}" alt="">
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="toptitle pl-8 mt-24">
            <img src="branddots.png" alt="">
            <div class="flex flex-row justify-between">
                <p class="text-[2.5rem]">All Games</p>
                <div class="flex flex-row gap-4 items-center mr-24">
                    <form id="search-and-filter-form" class = "flex flex-row gap-4 items-center mr-24">
                        <div class="focus-within:border-[#e20613] transition-all flex flex-row bg-white border-2 rounded-full border-black h-min p-2">
                            <input type="text" id="search-input" placeholder="Search..." class="placeholder-[#e20613] focus:outline-none appearance-none px-2">
                            <p class="text-[#e20613] px-2"><i class="fa-solid fa-magnifying-glass"></i></p>
                        </div>

                        <div class="flex flex-row items-center">
                            <select id="genre" class="group hover:text-white bg-white hover:bg-black transition-all flex flex-row px-4 h-min py-2 items-center border-2 border-black rounded-full">
                                <option selected disabled class="text-sm">Genre</option>
                                <option value="all">All</option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
            </div>

            <div id="games-container" class="flex flex-row flex-wrap mb-8 mt-4 gap-4"></div>
            <div id="pagination-links" class = "mr-12">
                
                </div>
        </div>
    </div>
    @include('includes.footer')
</body>
<script>
    $(document).ready(function() {
        function submitForm(page = 1) {
            var keyword = $('#search-input').val();
            var genre = $('#genre').val();

            $.ajax({
                url: '/games/search',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    keyword: keyword,
                    genre: genre,
                    page: page,
                },
                success: function(response) {
                    $('#pagination-links').html(response.html);
                    $('#games-container').empty();
                    response.data.data.forEach(function(game) {
                        var platformNames = '';
                        game.platforms.forEach(function(platform, index) {
                            platformNames += platform.platform.name;
                            if (index !== game.platforms.length - 1) {
                                platformNames += ', ';
                            }
                        });
                        console.log(game);
                        var gameElement = `
                            <a href="/games/${game.id}" class="hover:top-4 top-0 mb-8 animate-slide-in-blurred-bottom animation-delay-[${game.delay}ms] relative hover:scale-110 rounded-lg hover:shadow-2xl group ease-out transition-all duration-500">
                                <img class="rounded-lg w-[267px] h-[400px]" src="${game.assets.gridVertical}" alt="">
                                <div class="rounded-lg absolute top-0 right-0 bottom-0 left-0 w-full h-full bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-transparent via-transparent to-neutral-900 opacity-70"></div>
                                <div class="absolute top-0 right-0 bottom-0 left-0 w-full h-full flex justify-end gap-4 p-4 flex-col">
                                    <p class="group-hover:opacity-100 opacity-0 text-white text-shadow-xl uppercase">${game.title}</p>
                                    <p class="group-hover:opacity-100 opacity-0 text-white desc text-shadow-xl">${platformNames}</p>
                                    <img class="group-hover:opacity-100 opacity-0 w-1/6" src="esrb/${game.esrb}.png" alt="">
                                </div>
                            </a>
                        `;
                        $('#games-container').append(gameElement);
                    });
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        }

    $('#search-and-filter-form').submit(function(e) {
        e.preventDefault(); 
        submitForm();
    });
    
    $('#search-input').on('input', function() {
        submitForm();
    });

    $('#genre').change(function() {
        submitForm();
    });

    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        submitForm(page);
    });

    submitForm();
});
</script>
