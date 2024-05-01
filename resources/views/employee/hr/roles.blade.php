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
            <p class="flex justify-end font-bold text-2xl mb-4">Welcome to your dashboard, {{
                $employee->application->firstName }}!</p>
            <div class="daisy-stats flex flex-row justify-between my-4 shadow-md">

                <div class="daisy-stat">
                    <div class="daisy-stat-figure text-secondary">
                        <i class="text-[#e20613] text-[1.75rem] fas fa-tags"></i>
                    </div>
                    <div class="daisy-stat-title">Roles</div>
                    <div class="daisy-stat-value">{{ count($roles) }}</div>
                </div>

                <div class="daisy-stat">
                    <div class="daisy-stat-figure text-secondary">
                        <i class="text-[#e20613] text-[1.75rem] fas fa-user-tag"></i>
                    </div>
                    <div class="daisy-stat-title">Employees</div>
                    <div class="daisy-stat-value">{{ $employees }}</div>
                </div>

            </div>
        </div>

        <div class="ml-72 bg-neutral-100 mb-4 rounded-lg h-fit pb-8">
            <h1 class="text-3xl font-bold pt-8 pl-4">All Roles</h1>
            <div class="grid grid-cols-3 gap-4 mx-4 pt-8">
                @foreach($roles as $role)
                <div class="daisy-card w-full bg-base-100 shadow-xl">
                    @if ($role->availability == 'available')
                        <div class = "bg-[#049509] p-2 rounded-t-lg">
                            <p class = "pl-4 text-white"><i class = "fas fa-check mr-2"></i>Available!</p>
                        </div>
                    @else
                        <div class = "bg-[#95040e] p-2 rounded-t-lg">
                            <p class = "pl-4 text-white"><i class = "fas fa-ban mr-2"></i>Full</p>
                        </div>
                    @endif
                    <div class="daisy-card-body">
                        <div class = "flex flex-row justify-between">
                            <h2 class="daisy-card-title">{{ $role->roleName }}</h2>
                        </div>
                        
                        <p class="text-sm uppercase"><b class = "normal-case">Speciality:</b> {{ $role->special }}</p>
                        <p class="text-sm"><b>Work:</b> 
                            @if ($role->work !== null)
                            {{ $role->work }}
                            @else
                            <em class="text-xs text-gray-500"> none</em>
                            @endif
                        </p>
                        <p class="text-sm"><b>Relationship:</b> 
                            @if ($role->relation !== null)
                            {{ $role->relation }}
                            @else
                            <em class="text-xs text-gray-500"> none</em>
                            @endif
                        </p>

                        <div class="daisy-card-actions justify-end">
                            @if ($role->availability == 'available')
                                <form action="{{ route('hr.full') }}" method = "POST">
                                    @csrf
                                    <input type="text" name = "roleID" class = "hidden" value = "{{ $role->id }}">
                                    <button type = "submit" class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white hover:scale-105 transition-all"><i class = "fas fa-ban mr-2"></i>Full</button>
                                </form>
                            @else
                                <form action="{{ route('hr.available') }}" method = "POST">
                                    @csrf
                                    <input type="text" name = "roleID" class = "hidden" value = "{{ $role->id }}">
                                    <button type = "submit" class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white hover:scale-105 transition-all"><i class = "fas fa-check mr-2"></i>Available</button>
                                </form>
                            @endif

                            @if ($role->special !== 'hr')
                                <label class="bg-[#f90617] cursor-pointer px-4 py-2 rounded-lg text-white hover:scale-105 transition-all"><i class = "fas fa-pen-to-square mr-2"></i>Edit</label>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</body>