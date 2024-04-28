@include('includes.header')
<body>
    @include('includes.navbar')
    <div class = "careersbg3 pt-48 pl-48 pb-24">
        <p class = "text-gray-400 tracking-tight boldmedium mb-4 text-sm opacity-50">JOIN OUR TEAM</p>
        <p class = "text-white text-6xl boldfour mb-4 capitalize">{{ $role->roleName }}</p>
        <button class = "bg-white px-4 py-2 rounded-full boldmedium">Apply now</button>
    </div>
    <div class = "pl-16 pt-8 flex flex-row">
        <div class = "text-[0.975rem] pb-8">
            <div class = "border-r border-gray-500 pr-12">
                <p class = "boldfour tracking-tight mb-2">POSITION SUMMARY</p>
                <p>{{ $role->positionSummary }}</p>
                <p class = "boldfour my-16">Join us at our new campus in Irvine, California where a hybrid work schedule will be observed.  </p>
                <p class = "boldfour tracking-tight mb-2">ESSENTIAL DUTIES AND RESPONSIBILITIES</p>
            </div>
            <ul class = "list-disc">
                {!! $role->essentialDuties !!}
            </ul>
            <p class = "boldfour tracking-tight mt-8 mb-2">ESSENTIAL DUTIES AND RESPONSIBILITIES</p>
            <ul class = "list-disc">
                {!! $role->qualifications !!}
            </ul>
            <p class = "boldfour tracking-tight mt-8 mb-2">EDUCATIONAL REQUIREMENTS</p>
            <ul class = "list-disc">
                {!! $role->educational !!}
            </ul>
            <p class = "mt-8">{{ $role->salaryRange }}</p>
            <p class = "mt-8">Actual base salary will be determined based on numerous relevant business and candidate factors
                including, but not limited to, education, qualifications, certifications, experience, skills, geographic location,
                and business or organizational needs. The salary range listed is just one component of the total compensation package
                for employees and it is not typical for an individual to be hired at or near the top of the range for their role and
                compensation decisions are dependent on the facts and circumstances of each case.</p>
            <p class = "mt-16 mb-4 underline boldmedium">About Bandai Namco Entertainment America Inc.</p>
            <p>Bandai Namco Entertainment America Inc., part of the Bandai Namco Group, is a leading global publisher and developer 
                of interactive entertainment for major video game consoles, PC, online, and mobile platforms. The company is known for creating
                many of the industry’s beloved classic franchises such as PAC-MAN®, GALAGA®, TEKKEN®, SOULCALIBUR®, and ACE COMBAT®, and publishing
                the critically acclaimed DARK SOULS™ series and the blockbuster title ELDEN RING™. Bandai Namco Entertainment America Inc. is also
                the premier publisher in the Western hemisphere for anime-based video games including GUNDAM™, NARUTO SHIPPUDEN™, DRAGON BALL™, and
                ONE PIECE®. Bandai Namco Entertainment America Inc. is headquartered in Irvine, California. More information about the company and
                its products can be found at http://www.bandainamcoent.com.</p>

            <p class = "text-4xl boldfour mt-8 pb-12 border-b border-gray-400">Apply for this Job</p>
            <div class = "mt-4">
                <form class = "w-full flex flex-col gap-4">
                    <input type="text" class = "hidden" value = "{{ $role->id }}">
                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">FIRST NAME</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">LAST NAME</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">EMAIL</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">PHONE</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">LOCATION (CITY)</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">RESUME/CV</p>
                        <p class = "text-red-500">*</p>
                        <div class = "ml-2 flex flex-col">
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                            <p class = "nobold text-xs mt-1 text-gray-500">(File types: pdf, doc, docx, txt, rtf)</p>
                        </div>
                    </div>

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">PICTURE</p>
                        <p class = "text-red-500">*</p>
                        <div class = "ml-2 flex flex-col">
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                            <p class = "nobold text-xs mt-1 text-gray-500">(File types: png, jpg)</p>
                        </div>
                    </div>

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">COVER LETTER</p>
                        <div class = "ml-2 flex flex-col">
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 focus:outline-none" id="file_input" type="file">
                            <p class = "nobold text-xs mt-1 text-gray-500">(File types: pdf, doc, docx, txt, rtf)</p>
                        </div>
                    </div>

                    <div class = "flex flex-row boldmedium gap-1 pt-8 border-t border-gray-400">
                        <p class = "text-gray-500">COUNTRY</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">LINKEDIN PROFILE</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">LINK TO PORTFOLIO</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">HOW DID YOU HEAR ABOUT THIS JOB?</p>
                        <p class = "text-red-500">*</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <div class = "flex flex-row boldmedium gap-1">
                        <p class = "text-gray-500">WHAT IS YOUR SALARY EXPECTATION?</p>
                    </div>
                    <input class = "border p-2 px-4 w-full" type="text">

                    <button class = "self-end bg-orange-500 text-white px-6 py-4 rounded-full hover:bg-orange-300 transition-all">SUBMIT APPLICATION</button>
                </form>
            </div>
        </div>
        <div class = "w-full flex flex-col items-center">
            <button class = "border-2 border-black rounded-full px-4 py-2 hover:bg-black hover:text-white transition-all">Back To Careers</button>
            <div class = "text-black tracking-tight boldmedium mt-8">
                <p>OPEN POSITIONS</p>
                <div class = "pl-4 flex flex-col gap-4 mt-4">
                    @foreach ($openPositions as $career)
                        <a class = "font-bold" href="/careers/{{ $career->id }}">{{ $career->roleName }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>