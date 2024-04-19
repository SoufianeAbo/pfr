<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class = "bg-black flex justify-end items-center gap-8 fixed w-full z-50">
        <div class = "text-white flex flex-row gap-4">
            <a href="{{ route('games.index') }}" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Games</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">News</a>
            <a href="#" class = "relative w-fit block after:block after:content-[''] after:absolute after:h-[1px] after:bg-white after:w-full after:scale-x-0 after:hover:scale-x-100 after:transition after:duration-300 after:origin-center">Contact</a>
        </div>
        <img class = "w-16 drop-shadow-md my-2 mr-4" src="neolinelogo.png" alt="">
    </div>
    <div class = "pt-16">
        <div class = "toptitle flex flex-col careersbg items-center py-24">
            <p class = "text-white text-5xl">Careers</p>
            <button class = "mt-4 text-white border-2 px-4 py-2 rounded-full transition-all hover:bg-[#e20613] hover:text-black hover:border-[#e20613]">View Job Openings</button>
        </div>
    </div>
    <div class = "pl-24 pt-12 flex flex-row items-center gap-8">
        <img class = "object-fill" src="https://www.simplon.ma/theme/medias/thumbs/youcode-1_x500.jpg" alt="">
        <div class = "flex flex-col items-start w-1/2">
            <img class = "object-none" src="branddots.png" alt="">
            <p class = "text-[2.5rem] boldfour">Who We Are</p>
            <p>Bandai Namco exists to share dreams, fun and inspiration with people around the world. 
                Connecting people and societies in the enjoyment of uniquely entertaining products and
                services, we're working to create a brighter future for everyone.</p>
        </div>
    </div>
    <p class = "px-24 mt-12"><iframe class = "rounded-lg" width="100%" height="520px" src="https://www.youtube.com/embed/3-hiA18Lrvw" title="" frameBorder="0"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"  allowFullScreen></iframe></p>
    <div class = "careersbg2 flex flex-col mt-24 py-24 items-center">
        <p class = "text-white boldfour text-[2.5rem]">Our Core Values</p>
        <p class = "text-white">As a mission and values driven organization, discover what it means to be part of "Fun for All into the Future."</p>
        <button class = "rounded-full border-0 bg-white p-2 px-6 mt-4 transition-all hover:bg-[#e20613]">Learn More <i class="fa-solid fa-arrow-right ml-2"></i></button>
    </div>
    <!-- <div class = "flex flex-col items-center mt-14">
        <img src="branddots.png" alt="">
        <p class = "boldfour text-[2.5rem] mt">Life at Neoline Studios</p>
        <p class = "text-md">Take a peek at what it's like to work and play at one of the top publishers in the industry.</p>
    </div> -->
    <!-- <div class = "px-24 flex flex-row mt-4 w-full justify-between">
        <img class = "rounded-lg w-96" src="https://media.graphassets.com/2KhKbFztTTGj5AeZY94d" alt="">
        <div class = "flex flex-col items-center gap-4">
            <img class = "rounded-lg" src="https://media.graphassets.com/pr3K1R6RSJqcoC4eTIcG" alt="">
            <img class = "w-1/2 rounded-lg" src="https://media.graphassets.com/t6io2b4oQQiuSVxs36vP" alt="">
        </div>
    </div> -->
    <div class = "flex flex-col items-center mt-14">
        <img src="branddots.png" alt="">
        <p class = "boldfour text-[2.5rem] mt">Benefits</p>
        <p class = "text-md">Here are some of the amazing benefits we offer:</p>
        <div class = "grid grid-cols-4 grid-rows-2 gap-8 mt-8 w-1/2">
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

        <div class = "mt-24 flex flex-row-reverse px-24 gap-8">
            <img class = "w-1/2" src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1b/25/36/5f/united-nations-headquarters.jpg?w=1200&h=-1&s=1" alt="">
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
</body>