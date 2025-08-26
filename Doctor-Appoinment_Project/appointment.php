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

  <section class="relative bg-[url('../src/images/appoinment.png')] bg-cover bg-center w-[1366px] h-[250px] flex items-center  mx-auto">

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
    <a href="../services/services.php">Appoinment</a>
</span>
</p>

    <h2 class="text-[#1F2B6C] -mt-3 font-yeseva text-[48px] not-italic font-normal leading-normal">Book an Appointment</h2>
  </div>

  <!-- Divider (bottom) -->
  <div class="absolute bottom-0 left-0 w-full">
    <img src="./src/images/divider.png" alt="Divider" class="w-full object-contain">
  </div>

</section>

<!-- Appointment Section -->
  <section class="w-[1366px] flex gap-6 px-[187px] pt-[64px]">
      <!-- left form -->
       <div class="w-[486px] flex flex-col items-start gap-3 -mt-1">
        <div class="heading flex flex-col items-start gap-2 ">
             <h2 class="font-yeseva text-[32px] font-normal leading-normal text-[#1F2B6C] ">Book an Appointment</h2>
             <h3 class="text-base font-normal leading-[140%] font-['Work_Sans'] text-[#212124] text-[16px] text-left">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et.
          </h3>
      

       <form class="bg-[#1F2B6C] text-white mt-14 rounded-[5px] w-[491px] mx-auto">
       <!-- Name and Gender -->
       <div class="grid grid-cols-2">
         <div class="relative">
               <input type="text" id="name" placeholder="Name" required class="w-full bg-transparent border-b border-white px-2 py-3 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4"
             />
          </div>
        <div class="relative w-full">
         <select id="gender" required
          class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
       <option value="" disabled selected class="text-white">Gender</option>
       <option value="male">Male</option>
       <option value="female">Female</option>
       <option value="other">Other</option>
          </select>

         <!-- Custom Dropdown Icon -->
         <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
             <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8"/>
          </svg>
         </div>
        </div>


       </div>

       <!-- Email and Phone -->
       <div class="grid grid-cols-2">
        <div class="relative ">
            <input type="email" id="email" placeholder="Email" required class="w-full bg-transparent border-b  border-white px-2 py-3.5 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4"
             />
     
        </div>
         <div class="relative">
               <input type="text" id="phone" placeholder="Phone" required class="w-full bg-transparent border-b border-l border-white px-2 py-3.5 focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-4"
             />
          </div>
        
       </div>

       <!-- Date and time -->
       <div class="grid grid-cols-2">
         <div class="relative w-full">
         <select id="date" required
          class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
       <option value="" disabled selected class="text-white">Date</option>
       <option value="date1">Date 1</option>
       <option value="date2">Date 2</option>
       <option value="date3">Date 3</option>
          </select>

         <!-- Custom Dropdown Icon -->
         <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
             <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8"/>
          </svg>
         </div>
        </div>
        <!-- Time -->
        <div class="relative w-full">
         <select id="time" required
          class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
       <option value="" disabled selected class="text-white">Time</option>
       <option value="time1">Time 1</option>
       <option value="time2">Time 2</option>
       <option value="time3">Time 3</option>
          </select>

         <!-- Custom Dropdown Icon -->
         <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
             <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8"/>
          </svg>
         </div>
        </div>


       </div>

        <!-- Doctor and Department -->
       <div class="grid grid-cols-2">
         <div class="relative w-full">
         <select id="doctor" required
          class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3.5 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
       <option value="" disabled selected class="text-white">Doctor</option>
       <option value="doctor1">Doctor 1</option>
       <option value="doctor2">Doctor 2</option>
       <option value="doctor3">Doctor 3</option>
          </select>

         <!-- Custom Dropdown Icon -->
         <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
             <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8"/>
          </svg>
         </div>
        </div>

        <div class="relative w-full">
         <select id="department" required
          class="w-full border-b border-l border-white bg-[#1F2B6C] px-5 py-3.5 pr-8 text-white focus:outline-none focus:border-[#BFD2F8] appearance-none">
       <option value="" disabled selected class="text-white">Department</option>
       <option value="cardiology">Cardiology</option>
       <option value="neurology">Neurology</option>
       <option value="orthopedics">Orthopedics</option>
          </select>

         <!-- Custom Dropdown Icon -->
         <div class="absolute right-5 top-1/2 transform -translate-y-1/2 pointer-events-none">
           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="10" viewBox="0 0 16 10" fill="none">
             <path d="M13.9465 0.34977C14.1728 0.125697 14.4784 0 14.7969 0C15.1153 0 15.4209 0.125697 15.6472 0.34977C15.759 0.459802 15.8477 0.590958 15.9082 0.735605C15.9688 0.880251 16 1.0355 16 1.19231C16 1.34913 15.9688 1.50437 15.9082 1.64902C15.8477 1.79367 15.759 1.92482 15.6472 2.03485L8.85124 8.6952C8.62442 8.91896 8.31862 9.04442 8 9.04442C7.68138 9.04442 7.37558 8.91896 7.14876 8.6952L0.352777 2.03485C0.241047 1.92482 0.152318 1.79367 0.0917536 1.64902C0.0311894 1.50437 0 1.34913 0 1.19231C0 1.0355 0.0311894 0.880251 0.0917536 0.735605C0.152318 0.590958 0.241047 0.459802 0.352777 0.34977C0.57908 0.125697 0.884678 0 1.20315 0C1.52161 0 1.82721 0.125697 2.05351 0.34977L8.00261 5.81195L13.9465 0.34977Z" fill="#BFD2F8"/>
          </svg>
         </div>
        </div>


       </div>



  <!-- Message -->
  <div class="relative">
    <textarea id="message" required 
              class="peer w-full h-[185px] bg-transparent px-2 py-4 text-white focus:outline-none placeholder-white placeholder:font-worksans placeholder:text-base placeholder:font-normal placeholder:leading-[140%] placeholder:pl-3   placeholder:pt-0"
              placeholder="Message"></textarea>
   
  </div>

  <!-- Submit Button -->
  <div class="flex justify-center bg-[#BFD2F8]">
    <button type="submit"
            class="bg-transparent w-full border-none text-[#1F2B6C] text-center font-[Work_Sans] text-[16px] font-medium uppercase leading-normal py-3 px-6 rounded-b-md hover:bg-pink-300 hover:text-[#1F2B6C] transition-colors duration-300">
      Submit
    </button>
  </div>
          </form>

         
       </div>
       </div>

     <!-- right Appointment information -->
    <div class="w-[481px] h-[650px] flex-shrink-0 rounded-[5px] bg-[#1F2B6C] pt-[40px] pl-[70px]">
       <!-- Heading -->
  <h1 class="text-[#BFD2F8] font-yeseva text-[48px] font-normal leading-norma mb-1">Shedule hours</h1>

<!-- Schedule List -->
<ul class="pt-10 -ml-5 pr-9 space-y-6 text-[#FCFEFE] font-worksans text-[18px] font-normal leading-[140%]">
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Monday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
   <li class="flex items-center justify-between w-full">
    <span class="w-40">Tuesday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
  
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Wednesday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Thursday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Friday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Saturday</span>
    <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-right">09:00 AM - 07:00 PM</span>
  </li>
  <li class="flex items-center justify-between w-full">
    <span class="w-40">Sunday</span>
     <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0" width="20" height="3" viewBox="0 0 20 3" fill="none">
      <path d="M0 1.02002H19.5" stroke="#BFD2F8" stroke-width="2"/>
    </svg>
    <span class="w-64 text-center">Closed</span>
  </li>
</ul>


  <!-- Divider -->
  <div class="divider ml-2 mt-9">
    <svg xmlns="http://www.w3.org/2000/svg" width="331" height="3" viewBox="0 0 331 3" fill="none">
  <path d="M0 1.50085L331 1.50088" stroke="#BFD2F8" stroke-width="2"/>
</svg>
  </div>

  <!-- Emergency -->
  <div class="flex items-center gap-2 mt-6 ml-7">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
  <path d="M30.0336 41.7044C30.757 41.2868 31.2828 40.5955 31.4954 39.7825C31.708 38.9695 31.59 38.1015 31.1673 37.3694L29.5737 34.6091C29.151 33.8771 28.4583 33.3409 27.6479 33.1185C26.8376 32.8961 25.976 33.0059 25.2526 33.4235C19.7978 36.5728 16.6105 31.0522 15.0168 28.2918C13.4231 25.5315 10.2358 20.0109 15.6906 16.8616C16.4139 16.444 16.9398 15.7526 17.1524 14.9396C17.365 14.1267 17.247 13.2587 16.8243 12.5266L15.2306 9.76628C14.808 9.0342 14.1153 8.49801 13.3049 8.27565C12.4946 8.0533 11.6329 8.163 10.9096 8.58063C4.09109 12.5173 1.59367 17.6396 9.56202 31.4412C17.5304 45.2428 23.2151 45.6411 30.0336 41.7044Z" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M44.5491 30.3058C45.9978 24.7542 45.1906 18.8282 42.3047 13.8297C39.4188 8.83123 34.6904 5.16913 29.1582 3.64801M36.1986 28.0145C36.6302 26.3657 36.7338 24.6442 36.5034 22.9482C36.273 21.2522 35.7132 19.6151 34.8559 18.1303C33.9987 16.6454 32.8608 15.342 31.5072 14.2945C30.1536 13.247 28.6109 12.476 26.9673 12.0254M27.893 25.7065C28.1827 24.5956 28.021 23.4099 27.4436 22.4098C26.8662 21.4096 25.9201 20.6768 24.8133 20.3722" stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<!-- contact info -->
 <div class="flex flex-col gap-0">
  <h2 class="text-[#FCFEFE] font-worksans text-[26px] font-medium leading-normal">Emergency</h2>
  <p class="text-[#BFD2F8] font-worksans -mt-2 text-[26px] font-medium leading-normal">(237) 681-812-255</p>
 </div>     
 
</div>


 

  </section>




  <section class="w-[1366px] flex gap-6 px-[187px] pt-[64px] pb-1.5">
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


 <?php
 include './common/contactcard.php';
 include './common/footer.php';
 ?>

</body>
</html>