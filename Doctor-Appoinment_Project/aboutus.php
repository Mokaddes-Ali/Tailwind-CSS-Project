<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./src/output.css">
</head>
<body class="m-0 p-0 bg-[#fcfefe]">

<?php
include './common/header-top.php';
 include './common/header.php'; 
 ?>

    <section class="relative bg-[url('../src/images/doctorhead.png')] bg-cover bg-center w-[1366px] h-[250px] flex items-center  mx-auto">

  <!-- Frame -->
  <div class="absolute inset-0">
    <img src="./src/images/Frame 2.png" alt="Frame" class="w-full h-full object-cover" />
  </div>

  <!-- Overlay -->
  <div class="absolute inset-0 bg-white/50"></div>

  <!-- Content -->
  <div class="relative  flex flex-col gap-0 px-[187px] pt-[85px] pb-[98px] text-start text-[#1F2B6C]" >
    <p class="text-[#1F2B6C] font-['Work_Sans'] text-[18px] not-italic font-normal leading-[140%] flex items-center gap-0">
  <!-- Home link -->
  <a href="./home/home.php" class="hover:text-red-600 flex items-center gap-1">
    Home
  </a>

  <!-- SVG Separator -->
  <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mx-1" fill="none" viewBox="0 0 24 24" stroke="#1F2B6C">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 0v24" transform="rotate(25 12 12)" />
  </svg>

  <!-- Current page -->
  <span>
    <a href="../services/services.php">About</a>
</span>
</p>

    <h2 class="text-[#1F2B6C] -mt-3 font-yeseva text-[48px] not-italic font-normal leading-normal">About us</h2>
  </div>

  <!-- Divider (bottom) -->
  <div class="absolute bottom-0 left-0 w-full">
    <img src="./src/images/divider.png" alt="Divider" class="w-full object-contain">
  </div>

</section>

<!-- About card Section -->
  <section class="w-[1366px] flex gap-6 px-[187px] pt-[64px] pb-[65px]">

  <!-- Team Card -->
         <div class="team-card flex gap-5">
            <!-- left image -->
             <div class="left-img w-[458px] h-[509px]">
                <img src="./src/images/aboutleft.png" alt="aboutusimg" class="w-full h-full object-cover">
             </div>

             <!-- right content -->
             <div class="right-content flex flex-col">
                <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C]">Our Team</h3>
                <p class="text-base font-normal leading-[140%] font-['Work_Sans'] text-[#212124] text-[16px] text-left">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare.
                </p>
             </div>
         </div>

  </section>


  <!-- Testimonial Card -->
  <section class="testimonial-card relative bg-[url('../src/images/doctortestimonial.png')] bg-cover bg-center w-[1366px] h-[441px] flex flex-col items-center">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#1F2B6C]/60"></div>


    <!-- Content -->
    <div class="card-content-wrapper relative z-10 flex flex-col items-center justify-center gap-4 py-16">
        <!-- quote icon -->
         <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="30" viewBox="0 0 45 30" fill="none">
         <path d="M26.25 0V18.75H36.5625L30 30H38.4375L45 18.75V0H26.25ZM0 18.75H10.3125L3.75 30H12.1875L18.75 18.75V0H0V18.75Z" fill="#BFD2F8"/>
       </svg>
         </div>
      <p class="text-[#FCFEFE] max-w-[658px] pt-[26px] text-center font-worksans text-[22px] not-italic font-normal leading-[140%]">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque felis vitae tortor augue. Velit nascetur Consequat faucibus porttitor enim et.
      </p>
      <div class="divider pt-0.5">
        <div class="w-[221.5px] h-0 flex-shrink-0 border-t border-[1px] border-[#BFD2F8]"></div>
      </div>
      <h4 class="pt-1.5 font-worksans text-[#FCFEFE] text-center text-[22px] not-italic font-normal leading-[140%]">
        John Doe
      </h4>
    </div>

    <!-- handle testimonials -->
     <div class="button -mt-9 flex gap-3">
        <!-- First Divider -->
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <rect width="18" height="18" rx="9" fill="#FCFEFE"/>
</svg>

<!-- Second Divider -->
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <rect width="18" height="18" rx="9" fill="#BFD2F8"/>
</svg>

<!-- Third Divider -->
<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
  <rect width="18" height="18" rx="9" fill="#FCFEFE"/>
</svg>

     </div>
  </section>



 <?php
 include './common/news.php';
 include './common/contactcard.php';
 include './common/footer.php';
 ?>

</body>
</html>