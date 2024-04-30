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
                        src="{{ asset('storage/' . $employee->application->picture) }}"
                        alt="">
                    <p class="text-white">{{ $employee->application->firstName }} {{ $employee->application->lastName }}</p>
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
            <a href="{{ route('logout') }}" class="text-white p-2 px-12 rounded-full bg-[#f90617]"><i
                    class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Log out</a>
        </div>
    </div>
    <div class="pt-8 w-11/12">
        <div class="ml-72 bg-neutral-100 rounded-lg h-screen">
            <h1 class="text-3xl font-bold pt-8 pl-4">Applications</h1>
            <div class="grid grid-cols-3 gap-4 mx-4 pt-8">
                @foreach ($applications as $applicant)
                <div class="daisy-card w-full bg-base-100 shadow-xl">
                    <div class="daisy-card-body">
                        <div class="flex flex-row justify-between">
                            <h2 class="daisy-card-title">{{ $applicant->firstName }} {{ $applicant->lastName }}</h2>
                            <div class="daisy-avatar">
                                <div class="w-12 rounded-full">
                                    <img src="{{ asset('storage/' . $applicant->picture) }}" />
                                </div>
                            </div>
                        </div>
                        <p class = "text-sm"><b>Applied Role:</b> {{ $applicant->role->roleName }}</p>
                        <p class = "text-sm"><b>Source:</b> {{ $applicant->source }}</p>
                        <p class = "text-sm"><b>Date Applied:</b> {{ $applicant->created_at }}</p>
                        <div class="daisy-card-actions justify-end">
                            <label for = "modal_{{ $applicant->id }}" class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white">Details</label>
                            <input type="checkbox" id="modal_{{ $applicant->id }}" class="daisy-modal-toggle" />
                            <dialog class="daisy-modal bg-black bg-opacity-20">
                            <div class="daisy-modal-box">
                                <div class = "flex flex-row items-center justify-between">
                                    <h3 class="font-bold text-5xl">{{ $applicant->firstName }} {{ $applicant->lastName }}</h3>
                                    <div class="daisy-avatar">
                                        <div class="w-24 rounded-full">
                                            <img src="{{ asset('storage/' . $applicant->picture) }}" />
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-4 pb"><b>First Name:</b> {{ $applicant->firstName }}</p>
                                <p class="py"><b>Last Name:</b> {{ $applicant->lastName }}</p>
                                <p class="py"><b>Email:</b> {{ $applicant->email }}</p>
                                <p class="py"><b>Phone:</b> {{ $applicant->phone }}</p>
                                <p class="py"><b>City:</b> {{ $applicant->city }}</p>
                                
                                @if ($applicant->coverLetter == null)
                                    <p class="py"><b>Cover Letter:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                @else
                                    <p class="py"><b>Cover Letter:</b><a href="{{ asset('storage/' . $applicant->coverLetter) }}" download><em class = "text-xs text-blue-500 underline"> Download here</em></a></p>
                                @endif

                                <p class="py"><b>Resume/CV:</b><a href="{{ asset('storage/' . $applicant->resume) }}" download><em class = "text-xs text-blue-500 underline"> Download here</em></a></p>
                                <p class="py"><b>Country:</b> {{ $applicant->country }}</p>

                                @if ($applicant->linkedinProfile == null)
                                    <p class="py"><b>LinkedIn Profile:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                @else
                                    <p class="py"><b>LinkedIn Profile:</b><a href="{{ $applicant->linkedinProfile }}"><em class = "text-xs text-blue-500"><i class = "fab fa-linkedin ml-2"></i> Visit link!</em></a></p>
                                @endif

                                @if ($applicant->portfolio == null)
                                    <p class="py"><b>Portfolio:</b><em class = "text-xs text-gray-500"> none attached</em></p>
                                @else
                                    <p class="py"><b>Portfolio:</b><a href="{{ $applicant->linkedinProfile }}"><em class = "text-xs text-blue-500"><i class = "fas fa-paperclip ml-2"></i> Visit link!</em></a></p>
                                @endif
                                <p class="py"><b>Salary Expectation:</b> <p class = "text-green-500">{{ number_format($applicant->salaryExpectation) }}$</p></p>
                                <p class="py-4"><b>Position:</b> {{ $applicant->role->roleName }}</p>
                                <div class = "flex flex-row-reverse justify-between">
                                    <div class="daisy-modal-action">
                                        <label class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white" for = "modal_{{ $applicant->id }}">Close</label>
                                    </div>

                                    <div class = "flex flex-row daisy-modal-action">
                                        <form method = "POST" action="{{ route('hr.accept') }}">
                                            @csrf
                                            <input class = "hidden" name = "applicationID" type="text" value = "{{ $applicant->id }}" >
                                            <button type = "submit" class = "bg-green-600 cursor-pointer px-4 py-2 rounded-lg text-white"><i class = "fas fa-check mr-2"></i>Accept</button>
                                        </form>
                                        <button class = "bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white"><i class = "fas fa-xmark mr-2"></i>Reject</button>
                                    </div>
                                </div>
                            </div>
                            </dialog>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>