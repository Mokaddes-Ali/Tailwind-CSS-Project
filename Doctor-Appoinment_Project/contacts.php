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

    <section class="relative bg-[url('../src/images/contacthead.png')] bg-cover bg-center w-[1366px] h-[250px] flex items-center  mx-auto">

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
    <a href="../services/services.php">Contact</a>
</span>
</p>

    <h2 class="text-[#1F2B6C] -mt-3 font-yeseva text-[48px] not-italic font-normal leading-normal">Our Contacts</h2>
  </div>

  <!-- Divider (bottom) -->
  <div class="absolute bottom-0 left-0 w-full">
    <img src="./src/images/divider.png" alt="Divider" class="w-full object-contain">
  </div>

</section>

  <section class="w-[1366px] flex gap-6 px-[187px] pt-[64px] pb-[65px]">
<!-- Map -->
 <div class="w-full h-[450px] overflow-hidden">
  <iframe
    class="w-full h-full border-0"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.123456789!2d90.4123456!3d23.8101234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf123456789%3A0xabcdef123456789!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1693034567890!5m2!1sen!2sus"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
</section>


<!-- Contact card Section -->
  <section class="w-[1366px] flex gap-5 px-[187px]  pb-[65px]">
      <!-- left form -->
       <div class="w-[486px] flex flex-col items-start gap-3 -mt-1">
        <!-- heading -->
        <div class="heading flex flex-col items-start ">
             <h2 class="font-worksans text-[18px] font-bold leading-normal tracking-[2.88px] text-[#159EEC] text-center uppercase">Get in touch</h2>
        <h3 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] text-center">
            Contact
        </h3>
         <form class="bg-[#1F2B6C] text-white mt-6 rounded-lg w-[486px] mx-auto space-y-6">
  <!-- Name and Email -->
  <div class="flex pt-4">
    <div class="relative w-1/2">
      <input type="text" id="name" required
             class="peer w-full bg-transparent border-b-1 border-r-1 border-white p-2 text-white placeholder-transparent focus:outline-none"
             placeholder="Name" />
      <label for="name"
             class="absolute left-3 -top-3.5 text-white text-sm transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-300 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-white">
        Name
      </label>
    </div>
    <div class="relative w-1/2">
      <input type="email" id="email" required
             class="peer w-full bg-transparent border-b-1 border-white p-2 text-white placeholder-transparent focus:outline-none"
             placeholder="Email" />
      <label for="email"
             class="absolute left-3 -top-3.5 text-white text-sm transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-300 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-white">
        Email
      </label>
    </div>
  </div>

  <!-- Subject -->
  <div class="relative">
    <input type="text" id="subject" required
           class="peer w-full bg-transparent border-b-1 border-white p-2 text-white placeholder-transparent focus:outline-none"
           placeholder="Subject" />
    <label for="subject"
           class="absolute left-2 -top-3.5 text-white text-sm transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-300 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-white">
      Subject
    </label>
  </div>

  <!-- Message -->
  <div class="relative">
    <textarea id="message" required rows="6"
              class="peer w-full bg-transparent p-2 text-white placeholder-transparent focus:outline-none"
              placeholder="Message"></textarea>
    <label for="message"
           class="absolute left-2 -top-3.5 text-white text-sm transition-all peer-placeholder-shown:top-2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-300 peer-focus:-top-3.5 peer-focus:text-sm peer-focus:text-white">
      Message
    </label>
  </div>

  <!-- Submit Button -->
  <div class="flex justify-center bg-[#BFD2F8]">
    <button type="submit"
            class="bg-transparent w-full border-none text-[#1F2B6C] text-center font-[Work_Sans] text-[16px] font-medium uppercase leading-normal py-2 px-6 rounded-b-md hover:bg-pink-300 hover:text-[#1F2B6C] transition-colors duration-300">
      Submit
    </button>
  </div>
</form>

       </div>
       </div>
      
     <!-- right contact information -->
    <!-- Contact card -->
    <div class="grid grid-cols-2 gap-5">
        <!-- First Card -->
        <div class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] p-[52px_0px_50px_28px] flex flex-col items-start gap-1 transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans">
            <div class="svg-icon w-10 h-12">
                  <!-- SVG Icon -->
<svg class="w-[40px] h-[40px] stroke-[#1F2B6C] group-hover:stroke-white transition-all duration-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 39" fill="none">
  <path d="M24.1459 33.1261C24.7274 32.7903 25.1502 32.2345 25.3211 31.5809C25.492 30.9273 25.3972 30.2295 25.0574 29.6409L23.7761 27.4218C23.4363 26.8332 22.8794 26.4021 22.2279 26.2233C21.5764 26.0446 20.8837 26.1328 20.3021 26.4685C15.9167 29.0005 13.3542 24.5621 12.0729 22.3429C10.7917 20.1237 8.22919 15.6853 12.6146 13.1534C13.1962 12.8176 13.6189 12.2618 13.7899 11.6082C13.9608 10.9546 13.8659 10.2568 13.5261 9.66823L12.2449 7.44904C11.905 6.86048 11.3481 6.42939 10.6966 6.25063C10.0451 6.07187 9.35243 6.16006 8.77089 6.49582C3.28908 9.66074 1.28125 13.7789 7.6875 24.8748C14.0938 35.9708 18.6641 36.291 24.1459 33.1261Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M35.8156 23.962C36.9804 19.4988 36.3314 14.7345 34.0113 10.7159C31.6911 6.6973 27.8896 3.75312 23.442 2.5302M29.1022 22.1199C29.4492 20.7944 29.5325 19.4103 29.3472 18.0468C29.162 16.6833 28.712 15.3671 28.0227 14.1734C27.3335 12.9796 26.4187 11.9318 25.3305 11.0896C24.2423 10.2475 23.002 9.62754 21.6806 9.26527M22.4248 20.2644C22.6577 19.3713 22.5278 18.418 22.0635 17.6139C21.5993 16.8099 20.8387 16.2207 19.9488 15.9758" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

            </div>



  <!-- Title -->
  <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    Emergency
  </h3>

  <!-- Body -->
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    (237) 681-812-255
  </p>
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    (237) 666-331-894
  </p>
        </div>
       <!-- Second Card -->
        <div
  class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white"
>
  <div class="svg-icon w-10 h-12">
    <!-- SVG Icon -->
    <svg
      class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 32 39"
    >
      <path
        d="M1 15.4C1 29.8 16 37 16 37C16 37 31 29.8 31 15.4C31 7.45 24.2875 1 16 1C7.7125 1 1 7.45 1 15.4Z"
        stroke="currentColor"
        stroke-width="2"
      />
      <path
        d="M16.0001 20.32C18.8499 20.32 21.1601 18.0098 21.1601 15.16C21.1601 12.3102 18.8499 10 16.0001 10C13.1503 10 10.8401 12.3102 10.8401 15.16C10.8401 18.0098 13.1503 20.32 16.0001 20.32Z"
        stroke="currentColor"
        stroke-width="2"
      />
    </svg>
  </div>





  <!-- Title -->
  <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    Location
  </h3>

  <!-- Body -->
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    0123 Some place
  </p>
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    9876 Some country
  </p>
        </div>

          <!-- Third Card -->
<div
  class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white"
>
  <div class="svg-icon w-10 h-12">
    <!-- SVG Icon -->
    <svg
      class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 39 32"
    >
      <path 
        d="M1.7998 1H37.1998V30.5H1.7998V1Z" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round"
      />
      <path 
        d="M37.1998 6.8999L19.4998 18.6999L1.7998 6.8999" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round" 
        stroke-linejoin="round"
      />
    </svg>
  </div>

  <!-- Title -->
  <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase transition-colors duration-500">
    Email
  </h3>

  <!-- Body -->
  <p class="text-[16px] font-normal leading-[140%] transition-colors duration-500">
    fildineeesoe@gmil.com
  </p>
  <p class="text-[16px] font-normal leading-[140%] transition-colors duration-500">
    myebstudios@gmail.com
  </p>
</div>


      <!-- Fourth Card -->
<div
  class="w-[233px] h-[233px] flex-shrink-0 rounded-[5px] bg-[#BFD2F8] 
  p-[52px_0px_50px_28px] flex flex-col items-start gap-1 
  transition-all duration-500 hover:bg-[#1F2B6C] group font-worksans 
  text-[#1F2B6C] hover:text-white"
>
  <div class="svg-icon w-10 h-12">
    <!-- SVG Icon -->
    <svg
      class="w-[40px] h-[40px] fill-none transition-all duration-500 block"
      xmlns="http://www.w3.org/2000/svg"
      viewBox="0 0 33 32"
    >
      <path 
        d="M16.6777 31C24.962 31 31.6777 24.2843 31.6777 16C31.6777 7.71573 24.962 1 16.6777 1C8.39346 1 1.67773 7.71573 1.67773 16C1.67773 24.2843 8.39346 31 16.6777 31Z" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round"
      />
      <path 
        d="M21.6777 23.5L16.6777 16V6" 
        stroke="currentColor" 
        stroke-width="2" 
        stroke-linecap="round"
      />
    </svg>
  </div>

  <!-- Title -->
  <h3 class="font-worksans text-[18px] font-bold leading-normal uppercase text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    Working Hours
  </h3>

  <!-- Body -->
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    Mon-Sat 09:00-20:00
  </p>
  <p class=" text-[16px] font-normal leading-[140%] text-[#1F2B6C] group-hover:text-white transition-colors duration-500">
    Sunday Emergency only
  </p>
</div>




    </div>

 

  </section>



 <?php
 include './common/news.php';
 include './common/footer.php';
 ?>

</body>
</html>