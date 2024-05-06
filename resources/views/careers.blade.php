@include('includes.header')
<body>
    @include('includes.navbar')
    <div class = "pt-16">
        <div class = "toptitle flex flex-col careersbg items-center py-24">
            <p class = "text-white text-5xl">Careers</p>
            <a href = "#jobOpenings" class = "cursor-pointer mt-4 text-white border-2 px-4 py-2 rounded-full transition-all hover:bg-[#e20613] hover:text-white hover:border-[#e20613]">View Job Openings</a>
        </div>
    </div>
    <div class = "px-8 md:px-0 md:pl-24 pt-12 flex flex-row flex-wrap md:flex-nowrap items-center gap-8">
        <img class = "object-fill" src="https://www.simplon.ma/theme/medias/thumbs/youcode-1_x500.jpg" alt="">
        <div class = "flex flex-col items-start w-full md:text-left text-center md:w-1/2">
            <img class = "object-none" src="branddots.png" alt="">
            <p class = "text-[2.5rem] boldfour md:m-0 m-auto">Who We Are</p>
            <p>Bandai Namco exists to share dreams, fun and inspiration with people around the world. 
                Connecting people and societies in the enjoyment of uniquely entertaining products and
                services, we're working to create a brighter future for everyone.</p>
        </div>
    </div>
    <p class = "px-24 mt-12"><iframe class = "rounded-lg hidden md:block" width="100%" height="520px" src="https://www.youtube.com/embed/3-hiA18Lrvw" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe></p>
    <div class = "careersbg2 flex flex-col mt-24 py-24 items-center">
        <p class = "text-white boldfour text-[2.5rem]">Our Core Values</p>
        <p class = "text-white px-8 text-center md:text-left md:px-0">As a mission and values driven organization, discover what it means to be part of "Fun for All into the Future."</p>
        <button class = "rounded-full border-0 bg-white p-2 px-6 mt-4 transition-all hover:bg-[#e20613]">Learn More <i class="fa-solid fa-arrow-right ml-2"></i></button>
    </div>

    <div class = "flex flex-col items-center mt-14">
        <img src="branddots.png" alt="">
        <p class = "boldfour text-[2.5rem] mt">Benefits</p>
        <p class = "text-md">Here are some of the amazing benefits we offer:</p>
        <div class = "grid md:grid-cols-4 md:grid-rows-2 gap-8 mt-8 w-1/2">
            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/evOiQehSQDiXO3bkb9tw" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Healthcare Benefits</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/gKv06sKQ8y5ROMKNTkSu" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Company Paid Life Insurance</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/Nn4e54qAT46AZp5M54Yg" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">401(k) Plan With Company Match</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/hABnH0QDutWmIpXptYgQ" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Paid Time Off & Paid Holidays</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/7KjZ7mFdRwmWVAWseUkQ" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Employee Reimbursements</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/X6jhAunQiq4TQUUGBv07" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Employee Referral Bonus</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/qFeWTNE9RhK8VBvaGk8O" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Time Away from Work</p>
            </div>

            <div class = "flex flex-col items-center">
                <img class = "w-1/2" src="https://media.graphassets.com/eMudVCJrQoyQ7FLI5p1Y" alt="">
                <p class = "boldfour text-[1.1rem] text-center mt-2">Fun at Work</p>
            </div>
        </div>

        <div class = "mt-24 flex flex-row-reverse md:flex-nowrap flex-wrap px-24 gap-8">
            <img class = "size-full md:size-1/2" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/25/36/5f/united-nations-headquarters.jpg?w=1200&h=-1&s=1" alt="">
            <div class = "flex flex-col items-start">
                <img class = "object-none" src="branddots.png" alt="">
                <p class = "boldfour text-[2.5rem] mb-4">Located In Irvine, California</p>
                <p class = "text-sm">Join us at our beautiful new campus in Orange County! We operate on a hybrid schedule that 
                    creates fun environments for collaboration, innovation, and inspiration.</p>

                <p class = "text-sm mt-4">We offer a professional work environment with many perks. Catered breakfasts, gourmet 
                    coffee machines, happy hours, and regular onsite celebrations are just a few examples.
                    We also have company outings throughout the year that take advantage of everything Southern
                    California has to offer.</p>

                <p class = "text-sm mt-4">And of course we’re immersed in our games, from dedicated game rooms to a 30-foot tall GUNDAM welcoming
                    visitors, a giant PAC-MAN in our lobby, and life-size statues of our famous game characters adorning our 
                    halls.</p>
            </div>
        </div>
    </div>
    <div class = "flex flex-col items-center mt-14">
        <img id = "jobOpenings" src="branddots.png" alt="">
        <p class = "boldfour text-[2.5rem] mt">Job Openings</p>
        <p class = "text-md">Find your next role with Neoline Studios</p>

        @if (session('success'))
            <div id = "error" class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                <i class="fas fa-circle-exclamation mr-2"></i>
                <div>
                    <span class="font-medium">Error!</span> {{ session('success') }}
                </div>
            </div>
        @endif
        @foreach ($careers as $career)
            <div class = "w-3/4 pt-4 pb-2 flex flex-col border-b-2 border-neutral-300">
                <div class = "flex flex-row justify-between items-center">
                    <p class = "text-xl boldfour">{{ $career->roleName }}</p>
                    @if ($career->availability == 'available')
                        <a href = "/careers/{{ $career->id }}" style = "font-weight: 500" class = "text-white bg-black rounded-full px-6 py-2 boldmedium transition-all hover:text-black border-black hover:bg-white border-2">Apply</a>
                    @else
                        <a href = "#" style = "font-weight: 500" class = "cursor-not-allowed text-white bg-red-500 rounded-full px-6 py-2 boldmedium transition-all border-red-500 hover:bg-red-500 border-2">Full</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <div class = "flex flex-col mt-14 items-center px-32 py-32">
        <img src="branddots.png" alt="">
        <p class = "boldfour text-[2.5rem]">Equal Opportunity Employer</p>
        <p class = "text-md text-center">We are an equal opportunity employer and make employment decisions on the basis of merit. 
            We do not discriminate based on race, ancestry, sex, gender, gender identification or expression, 
            genetic characteristics, religion (including religious dress and grooming practices), age, military
            or veteran status, color, marital status, sexual orientation, pregnancy, disability, registered domestic
            partner status, national origin, or any other category protected by law. </p>
    </div>
    @include('includes.footer')
</body>