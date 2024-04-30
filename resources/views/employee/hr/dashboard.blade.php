@include('includes.header')

<body class="dashboard">
    @include('employee.hr.sidebar')
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
            <p class = "flex justify-end font-bold text-2xl mb-4">Welcome to your dashboard, {{ $employee->application->firstName }}!</p>
            <div class="daisy-stats flex flex-row justify-between my-4 shadow-md">

                <div class="daisy-stat">
                    <div class="daisy-stat-figure text-secondary">
                        <i class = "text-[#e20613] text-[1.75rem] fas fa-wand-magic"></i>
                    </div>
                    <div class="daisy-stat-title">Pending Applications</div>
                    <div class="daisy-stat-value">{{ count($applications) }}</div>
                </div>

                <div class="daisy-stat">
                    <div class="daisy-stat-figure text-secondary">
                        <i class = "text-[#e20613] text-[1.75rem] fas fa-wand-magic-sparkles"></i>
                    </div>
                    <div class="daisy-stat-title">Accepted Applications</div>
                    <div class="daisy-stat-value">{{ count($acceptedApplications) }}</div>
                </div>

                <div class="daisy-stat">
                    <div class="daisy-stat-figure text-secondary">
                        <i class = "text-[#e20613] text-[1.75rem] fas fa-x"></i>
                    </div>
                    <div class="daisy-stat-title">Rejected Applications</div>
                    <div class="daisy-stat-value">{{ count($rejectedApplications) }}</div>
                </div>

            </div>
        </div>

        <div class="ml-72 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Pending Applications</h1>
            <div class="grid grid-cols-3 gap-4 mx-4 pt-8">
                @if (count($applications) !== 0)
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
                            <p class="text-sm"><b>Applied Role:</b> {{ $applicant->role->roleName }}</p>
                            <p class="text-sm"><b>Source:</b> {{ $applicant->source }}</p>
                            <p class="text-sm"><b>Date Applied:</b> {{ $applicant->created_at }}</p>
                            <div class="daisy-card-actions justify-end">
                                <label for="modal_{{ $applicant->id }}"
                                    class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white">Details</label>
                                <input type="checkbox" id="modal_{{ $applicant->id }}" class="daisy-modal-toggle" />
                                <dialog class="daisy-modal bg-black bg-opacity-20">
                                    <div class="daisy-modal-box">
                                        <div class="flex flex-row items-center justify-between">
                                            <h3 class="font-bold text-5xl">{{ $applicant->firstName }} {{
                                                $applicant->lastName }}</h3>
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
                                        <p class="py"><b>Cover Letter:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>Cover Letter:</b><a
                                                href="{{ asset('storage/' . $applicant->coverLetter) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        @endif

                                        <p class="py"><b>Resume/CV:</b><a
                                                href="{{ asset('storage/' . $applicant->resume) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        <p class="py"><b>Country:</b> {{ $applicant->country }}</p>

                                        @if ($applicant->linkedinProfile == null)
                                        <p class="py"><b>LinkedIn Profile:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>LinkedIn Profile:</b><a
                                                href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fab fa-linkedin ml-2"></i> Visit
                                                    link!</em></a></p>
                                        @endif

                                        @if ($applicant->portfolio == null)
                                        <p class="py"><b>Portfolio:</b><em class="text-xs text-gray-500"> none attached</em>
                                        </p>
                                        @else
                                        <p class="py"><b>Portfolio:</b><a href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fas fa-paperclip ml-2"></i>
                                                    Visit link!</em></a></p>
                                        @endif
                                        <p class="py"><b>Salary Expectation:</b>
                                        <p class="text-green-500">{{ number_format($applicant->salaryExpectation) }}$</p>
                                        </p>
                                        <p class="py-4"><b>Position:</b> {{ $applicant->role->roleName }}</p>
                                        <div class="flex flex-row-reverse justify-between">
                                            <div class="daisy-modal-action">
                                                <label class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white"
                                                    for="modal_{{ $applicant->id }}">Close</label>
                                            </div>

                                            <div class="flex flex-row daisy-modal-action">
                                                <form method="POST" action="{{ route('hr.accept') }}">
                                                    @csrf
                                                    <input class="hidden" name="applicationID" type="text"
                                                        value="{{ $applicant->id }}">
                                                    <button type="submit"
                                                        class="bg-green-600 cursor-pointer px-4 py-2 rounded-lg text-white"><i
                                                            class="fas fa-check mr-2"></i>Accept</button>
                                                </form>
                                                <form method="POST" action="{{ route('hr.reject') }}">
                                                    @csrf
                                                    <input class="hidden" name="applicationID" type="text"
                                                        value="{{ $applicant->id }}">
                                                    <button type="submit"
                                                        class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white"><i
                                                            class="fas fa-xmark mr-2"></i>Reject</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class = "text-center">No applications found.</p>
                @endif
            </div>
        </div>

        <div class="ml-72 bg-neutral-100 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Recent Acceptations</h1>
            <div class="grid grid-cols-3 gap-4 mx-4 pt-8">
                @if (count($acceptedApplications) !== 0)
                    @foreach ($acceptedApplications as $applicant)
                    <div class="daisy-card w-full bg-base-100 shadow-xl">
                        <div class = "bg-[#049509] p-2 rounded-t-lg">
                            <p class = "pl-4 text-white"><i class = "fas fa-check mr-2"></i>Accepted!</p>
                        </div>
                        <div class="daisy-card-body">
                            <div class="flex flex-row justify-between">
                                <h2 class="daisy-card-title">{{ $applicant->firstName }} {{ $applicant->lastName }}</h2>
                                <div class="daisy-avatar">
                                    <div class="w-12 rounded-full">
                                        <img src="{{ asset('storage/' . $applicant->picture) }}" />
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm"><b>Applied Role:</b> {{ $applicant->role->roleName }}</p>
                            <p class="text-sm"><b>Source:</b> {{ $applicant->source }}</p>
                            <p class="text-sm"><b>Date Applied:</b> {{ $applicant->created_at }}</p>
                            <div class="daisy-card-actions justify-end">
                                <label for="modalAccept_{{ $applicant->id }}"
                                    class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white">Details</label>
                                <input type="checkbox" id="modalAccept_{{ $applicant->id }}" class="daisy-modal-toggle" />
                                <dialog class="daisy-modal bg-black bg-opacity-20">
                                    <div class="daisy-modal-box">
                                        <div class="flex flex-row items-center justify-between">
                                            <h3 class="font-bold text-5xl">{{ $applicant->firstName }} {{
                                                $applicant->lastName }}</h3>
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
                                        <p class="py"><b>Cover Letter:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>Cover Letter:</b><a
                                                href="{{ asset('storage/' . $applicant->coverLetter) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        @endif

                                        <p class="py"><b>Resume/CV:</b><a
                                                href="{{ asset('storage/' . $applicant->resume) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        <p class="py"><b>Country:</b> {{ $applicant->country }}</p>

                                        @if ($applicant->linkedinProfile == null)
                                        <p class="py"><b>LinkedIn Profile:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>LinkedIn Profile:</b><a
                                                href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fab fa-linkedin ml-2"></i> Visit
                                                    link!</em></a></p>
                                        @endif

                                        @if ($applicant->portfolio == null)
                                        <p class="py"><b>Portfolio:</b><em class="text-xs text-gray-500"> none attached</em>
                                        </p>
                                        @else
                                        <p class="py"><b>Portfolio:</b><a href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fas fa-paperclip ml-2"></i>
                                                    Visit link!</em></a></p>
                                        @endif
                                        <p class="py"><b>Salary Expectation:</b>
                                        <p class="text-green-500">{{ number_format($applicant->salaryExpectation) }}$</p>
                                        </p>
                                        <p class="py-4"><b>Position:</b> {{ $applicant->role->roleName }}</p>
                                        <div class="flex flex-row-reverse justify-between">
                                            <div class="daisy-modal-action">
                                                <label class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white"
                                                    for="modalAccept_{{ $applicant->id }}">Close</label>
                                            </div>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class = "text-center">No applications found.</p>
                @endif
            </div>
        </div>

        <div class="ml-72 bg-neutral-100 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">Recent Rejections</h1>
            <div class="grid grid-cols-3 gap-4 mx-4 pt-8">
                @if (count($rejectedApplications) !== 0)
                    @foreach ($rejectedApplications as $applicant)
                    <div class="daisy-card w-full bg-base-100 shadow-xl">
                        <div class = "bg-[#95040e] p-2 rounded-t-lg">
                            <p class = "pl-4 text-white"><i class = "fas fa-x mr-2"></i>Rejected</p>
                        </div>
                        <div class="daisy-card-body">
                            <div class="flex flex-row justify-between">
                                <h2 class="daisy-card-title">{{ $applicant->firstName }} {{ $applicant->lastName }}</h2>
                                <div class="daisy-avatar">
                                    <div class="w-12 rounded-full">
                                        <img src="{{ asset('storage/' . $applicant->picture) }}" />
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm"><b>Applied Role:</b> {{ $applicant->role->roleName }}</p>
                            <p class="text-sm"><b>Source:</b> {{ $applicant->source }}</p>
                            <p class="text-sm"><b>Date Applied:</b> {{ $applicant->created_at }}</p>
                            <div class="daisy-card-actions justify-end">
                                <label for="modalReject_{{ $applicant->id }}"
                                    class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white">Details</label>
                                <input type="checkbox" id="modalReject_{{ $applicant->id }}" class="daisy-modal-toggle" />
                                <dialog class="daisy-modal bg-black bg-opacity-20">
                                    <div class="daisy-modal-box">
                                        <div class="flex flex-row items-center justify-between">
                                            <h3 class="font-bold text-5xl">{{ $applicant->firstName }} {{
                                                $applicant->lastName }}</h3>
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
                                        <p class="py"><b>Cover Letter:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>Cover Letter:</b><a
                                                href="{{ asset('storage/' . $applicant->coverLetter) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        @endif

                                        <p class="py"><b>Resume/CV:</b><a
                                                href="{{ asset('storage/' . $applicant->resume) }}" download><em
                                                    class="text-xs text-blue-500 underline"> Download here</em></a></p>
                                        <p class="py"><b>Country:</b> {{ $applicant->country }}</p>

                                        @if ($applicant->linkedinProfile == null)
                                        <p class="py"><b>LinkedIn Profile:</b><em class="text-xs text-gray-500"> none
                                                attached</em></p>
                                        @else
                                        <p class="py"><b>LinkedIn Profile:</b><a
                                                href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fab fa-linkedin ml-2"></i> Visit
                                                    link!</em></a></p>
                                        @endif

                                        @if ($applicant->portfolio == null)
                                        <p class="py"><b>Portfolio:</b><em class="text-xs text-gray-500"> none attached</em>
                                        </p>
                                        @else
                                        <p class="py"><b>Portfolio:</b><a href="{{ $applicant->linkedinProfile }}"><em
                                                    class="text-xs text-blue-500"><i class="fas fa-paperclip ml-2"></i>
                                                    Visit link!</em></a></p>
                                        @endif
                                        <p class="py"><b>Salary Expectation:</b>
                                        <p class="text-green-500">{{ number_format($applicant->salaryExpectation) }}$</p>
                                        </p>
                                        <p class="py-4"><b>Position:</b> {{ $applicant->role->roleName }}</p>
                                        <div class="flex flex-row-reverse justify-between">
                                            <div class="daisy-modal-action">
                                                <label class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white"
                                                    for="modalReject_{{ $applicant->id }}">Close</label>
                                            </div>
                                        </div>
                                    </div>
                                </dialog>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class = "text-center">No applications found.</p>
                @endif
            </div>
        </div>
    </div>
</body>