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

    <section class="relative bg-[url('../src/images/bloghead.png')] bg-cover bg-center w-[1366px] h-[250px] flex items-center  mx-auto">

        <!-- Frame -->
        <div class="absolute inset-0">
            <img src="./src/images/Frame 2.png" alt="Frame" class="w-full h-full object-cover" />
        </div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-white/50"></div>

        <!-- Content -->
        <div class="relative  flex flex-col gap-0 px-[187px] pt-[85px] pb-[98px] text-start text-[#1F2B6C]">
            <p
                class="text-[#1F2B6C] font-['Work_Sans'] text-[18px] not-italic font-normal leading-[140%] flex items-center gap-0">
                <!-- Home link -->
                <a href="./home/home.php" class="hover:text-red-600 flex items-center gap-1">
                    Home
                </a>

                <!-- SVG Separator -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 mx-1" fill="none" viewBox="0 0 24 24"
                    stroke="#1F2B6C">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 0v24"
                        transform="rotate(25 12 12)" />
                </svg>

                <!-- Current page -->
                <span>
                    <a href="../services/services.php">News</a>
                </span>
            </p>

            <h2 class="text-[#1F2B6C] -mt-3 font-yeseva text-[48px] not-italic font-normal leading-normal">Blog Posts
            </h2>
        </div>

        <!-- Divider (bottom) -->
        <div class="absolute bottom-0 left-0 w-full">
            <img src="./src/images/divider.png" alt="Divider" class="w-full object-contain">
        </div>

    </section>

    <!-- About card Section -->
    <section class="w-[1366px] flex gap-5 px-[187px] pt-[65px] pb-2">
        <!-- left blog card -->
        <div class="w-[658px] flex flex-col gap-8">
            <!-- single blog 1 -->
            <div class="w-[658px] h-[664px] flex flex-col gap-2">
                <!-- blog image -->
                <div class="image w-[658px] h-[400px]">
                    <img src="./src/images/blogimg1.png" alt="Blog 1" class="w-full h-full " />
                </div>
                <!-- blog info -->
                 <div class="flex items-center gap-6 pt-4">
                    <div class="flex  items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M15.2222 2.77783H2.77778C1.79594 2.77783 1 3.57377 1 4.55561V17.0001C1 17.9819 1.79594 18.7778 2.77778 18.7778H15.2222C16.2041 18.7778 17 17.9819 17 17.0001V4.55561C17 3.57377 16.2041 2.77783 15.2222 2.77783Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12.5557 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.44434 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M1 8.11108H17" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">Monday 05, September 2021</p>
                    </div>
                    <!-- author -->
                     <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">By <span>Author</span></p>
                     </div>
                     <!-- see number -->
                      <div class="see flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
  <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">68</p>
                      </div>

                      <!-- love react-->
                      <div class="see flex items-center gap-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
  <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">86</p>
                      </div>
                 </div>
                 <!-- content -->
                  <div class="content -mt-1">
                    <h2 class="text-[#1F2B6C] font-yeseva text-[32px] font-normal leading-normal">A passion for putting patients first</h2>
                    <p class="pt-2 text-[#212124] font-worksans text-base font-normal leading-[140%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et....</p>
                  </div>

                  <div class="button pt-3.5">
                    <button class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-[50px] bg-[#BFD2F8] text-[#1F2B6C] font-worksans text-base font-medium leading-normal">
  Read More
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
    <path d="M7.21795 11.5L11.8333 6.5M11.8333 6.5L7.21795 1.5M11.8333 6.5H1" 
          stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

                  </div>
            </div>

              <!-- single blog 2 -->
            <div class="w-[658px] h-[664px] flex flex-col gap-2">
                <!-- blog image -->
                <div class="image w-[658px] h-[400px]">
                    <img src="./src/images/blogimg2.png" alt="Blog 1" class="w-full h-full " />
                </div>
                <!-- blog info -->
                 <div class="flex items-center gap-6 pt-4">
                    <div class="flex  items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M15.2222 2.77783H2.77778C1.79594 2.77783 1 3.57377 1 4.55561V17.0001C1 17.9819 1.79594 18.7778 2.77778 18.7778H15.2222C16.2041 18.7778 17 17.9819 17 17.0001V4.55561C17 3.57377 16.2041 2.77783 15.2222 2.77783Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12.5557 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.44434 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M1 8.11108H17" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">Monday 05, September 2021</p>
                    </div>
                    <!-- author -->
                     <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">By <span>Author</span></p>
                     </div>
                     <!-- see number -->
                      <div class="see flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
  <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">68</p>
                      </div>

                      <!-- love react-->
                      <div class="see flex items-center gap-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
  <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">86</p>
                      </div>
                 </div>
                 <!-- content -->
                  <div class="content -mt-1">
                    <h2 class="text-[#1F2B6C] font-yeseva text-[32px] font-normal leading-normal">A passion for putting patients first</h2>
                    <p class="pt-2 text-[#212124] font-worksans text-base font-normal leading-[140%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et....</p>
                  </div>

                  <div class="button pt-3.5">
                    <button class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-[50px] bg-[#BFD2F8] text-[#1F2B6C] font-worksans text-base font-medium leading-normal">
  Read More
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
    <path d="M7.21795 11.5L11.8333 6.5M11.8333 6.5L7.21795 1.5M11.8333 6.5H1" 
          stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

                  </div>
            </div>

              <!-- single blog 3 -->
            <div class="w-[658px] h-[664px] flex flex-col gap-2">
                <!-- blog image -->
                <div class="image w-[658px] h-[400px]">
                    <img src="./src/images/blogimg3.png" alt="Blog 1" class="w-full h-full " />
                </div>
                <!-- blog info -->
                 <div class="flex items-center gap-6 pt-4">
                    <div class="flex  items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M15.2222 2.77783H2.77778C1.79594 2.77783 1 3.57377 1 4.55561V17.0001C1 17.9819 1.79594 18.7778 2.77778 18.7778H15.2222C16.2041 18.7778 17 17.9819 17 17.0001V4.55561C17 3.57377 16.2041 2.77783 15.2222 2.77783Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12.5557 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.44434 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M1 8.11108H17" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">Monday 05, September 2021</p>
                    </div>
                    <!-- author -->
                     <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">By <span>Author</span></p>
                     </div>
                     <!-- see number -->
                      <div class="see flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
  <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">68</p>
                      </div>

                      <!-- love react-->
                      <div class="see flex items-center gap-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
  <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">86</p>
                      </div>
                 </div>
                 <!-- content -->
                  <div class="content -mt-1">
                    <h2 class="text-[#1F2B6C] font-yeseva text-[32px] font-normal leading-normal">A passion for putting patients first</h2>
                    <p class="pt-2 text-[#212124] font-worksans text-base font-normal leading-[140%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et....</p>
                  </div>

                  <div class="button pt-3.5">
                    <button class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-[50px] bg-[#BFD2F8] text-[#1F2B6C] font-worksans text-base font-medium leading-normal">
  Read More
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
    <path d="M7.21795 11.5L11.8333 6.5M11.8333 6.5L7.21795 1.5M11.8333 6.5H1" 
          stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

                  </div>
            </div>

              <!-- single blog 4 -->
            <div class="w-[658px] h-[664px] flex flex-col gap-2">
                <!-- blog image -->
                <div class="image w-[658px] h-[400px]">
                    <img src="./src/images/blogimg4.png" alt="Blog 1" class="w-full h-full " />
                </div>
                <!-- blog info -->
                 <div class="flex items-center gap-6 pt-4">
                    <div class="flex  items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M15.2222 2.77783H2.77778C1.79594 2.77783 1 3.57377 1 4.55561V17.0001C1 17.9819 1.79594 18.7778 2.77778 18.7778H15.2222C16.2041 18.7778 17 17.9819 17 17.0001V4.55561C17 3.57377 16.2041 2.77783 15.2222 2.77783Z" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M12.5557 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M5.44434 1V4.55556" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M1 8.11108H17" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">Monday 05, September 2021</p>
                    </div>
                    <!-- author -->
                     <div class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
  <path d="M17 19V17C17 15.9391 16.5786 14.9217 15.8284 14.1716C15.0783 13.4214 14.0609 13 13 13H5C3.93913 13 2.92172 13.4214 2.17157 14.1716C1.42143 14.9217 1 15.9391 1 17V19" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M9 9C11.2091 9 13 7.20914 13 5C13 2.79086 11.2091 1 9 1C6.79086 1 5 2.79086 5 5C5 7.20914 6.79086 9 9 9Z" stroke="#159EEC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">By <span>Author</span></p>
                     </div>
                     <!-- see number -->
                      <div class="see flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="13" viewBox="0 0 18 13" fill="none">
  <path d="M8.98755 1C6.2041 1 3.34886 2.611 1.1011 5.83301C1.03694 5.92599 1.00178 6.0359 1.00007 6.14886C0.99835 6.26181 1.03015 6.37274 1.09146 6.46763C2.81853 9.17108 5.63555 11.2853 8.98755 11.2853C12.3031 11.2853 15.178 9.16465 16.9083 6.45513C16.9682 6.3621 17 6.25381 17 6.14318C17 6.03255 16.9682 5.92425 16.9083 5.83122C15.1741 3.15277 12.2781 1 8.98755 1Z" stroke="#526AE9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M8.9996 8.99969C10.5775 8.99969 11.8566 7.72056 11.8566 6.14267C11.8566 4.56478 10.5775 3.28564 8.9996 3.28564C7.42171 3.28564 6.14258 4.56478 6.14258 6.14267C6.14258 7.72056 7.42171 8.99969 8.9996 8.99969Z" stroke="#526AE9" stroke-width="1.5" stroke-miterlimit="10"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">68</p>
                      </div>

                      <!-- love react-->
                      <div class="see flex items-center gap-2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
  <path d="M14.5413 1.50364C13.6931 0.653189 12.5686 0.134124 11.3712 0.0402036C10.1737 -0.0537164 8.98209 0.283702 8.01163 0.99151C6.9935 0.234227 5.72624 -0.109161 4.46507 0.030495C3.20389 0.170151 2.04247 0.782479 1.21468 1.74417C0.386899 2.70586 -0.0457584 3.94548 0.0038373 5.21339C0.053433 6.48131 0.581598 7.68335 1.48197 8.57744L6.45124 13.5547C6.86736 13.9642 7.42779 14.1938 8.01163 14.1938C8.59547 14.1938 9.15591 13.9642 9.57203 13.5547L14.5413 8.57744C15.4756 7.63741 16 6.36589 16 5.04054C16 3.71518 15.4756 2.44367 14.5413 1.50364ZM13.413 7.47316L8.44374 12.4424C8.38719 12.4995 8.31989 12.5448 8.24572 12.5758C8.17156 12.6067 8.09199 12.6226 8.01163 12.6226C7.93127 12.6226 7.85171 12.6067 7.77754 12.5758C7.70337 12.5448 7.63607 12.4995 7.57952 12.4424L2.61026 7.44915C1.98271 6.80766 1.6313 5.94594 1.6313 5.04854C1.6313 4.15114 1.98271 3.28942 2.61026 2.64793C3.24975 2.01656 4.11222 1.66254 5.01087 1.66254C5.90952 1.66254 6.77199 2.01656 7.41148 2.64793C7.48587 2.72293 7.57437 2.78246 7.67188 2.82309C7.7694 2.86371 7.87399 2.88463 7.97962 2.88463C8.08526 2.88463 8.18985 2.86371 8.28736 2.82309C8.38488 2.78246 8.47338 2.72293 8.54777 2.64793C9.18726 2.01656 10.0497 1.66254 10.9484 1.66254C11.847 1.66254 12.7095 2.01656 13.349 2.64793C13.9852 3.28101 14.3481 4.13806 14.3601 5.03549C14.372 5.93291 14.0321 6.79933 13.413 7.44915V7.47316Z" fill="#E2315C"/>
</svg>
<p class="text-black font-worksans text-base font-normal leading-[140%]">86</p>
                      </div>
                 </div>
                 <!-- content -->
                  <div class="content -mt-1">
                    <h2 class="text-[#1F2B6C] font-yeseva text-[32px] font-normal leading-normal">A passion for putting patients first</h2>
                    <p class="pt-2 text-[#212124] font-worksans text-base font-normal leading-[140%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat scelerisque tortor ornare ornare. Quisque placerat scelerisque tortor ornare ornare Convallis felis vitae tortor augue. Velit nascetur proin massa in. Consequat faucibus porttitor enim et....</p>
                  </div>

                  <div class="button pt-3.5">
                    <button class="inline-flex items-center justify-center gap-2.5 px-6 py-3 rounded-[50px] bg-[#BFD2F8] text-[#1F2B6C] font-worksans text-base font-medium leading-normal">
  Read More
  <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13" fill="none">
    <path d="M7.21795 11.5L11.8333 6.5M11.8333 6.5L7.21795 1.5M11.8333 6.5H1" 
          stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</button>

                  </div>
            </div>

            <!-- button and pagination -->

              <div class="flex justify-between items-center -mt-0.5">
                <!-- preview button -->
                <button class="preview-button flex items-center gap-2 text-[#159EEC] font-worksans text-base font-normal leading-[140%]">
                   <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
                    <path d="M5.6153 11L0.999919 6M0.999919 6L5.6153 1M0.999919 6H11.8333" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                   <span>Previous Page</span>
                </button>

              <div class="font-worksans text-base font-normal leading-[140%] text-right text-[#000]">
  <div class="flex justify-end items-center space-x-1.5">
    <a href="#" class="text-[#159EEC] hover:underline">1</a>
    <span class="text-[#000]">-</span>
    <a href="#" class="text-[#159EEC] hover:underline">2</a>
    <span class="text-[#000]">-</span>
    <a href="#" class="text-[#159EEC] hover:underline">3</a>
    <span class="text-[#000]">-</span>
    <a href="#" class="text-[#159EEC] hover:underline">4</a>
    <span class="text-[#000]">-</span>
    <a href="#" class="text-[#159EEC] hover:underline">5</a>
  </div>
</div>

 

                <!-- next button -->
                <button class="next-button flex items-center gap-2 text-[#159EEC] font-worksans text-base font-normal leading-[140%]">
                   <span>Next Page</span>
                   <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
  <path d="M7.21795 11L11.8333 6M11.8333 6L7.21795 1M11.8333 6H1" stroke="#1F2B6C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                </button>
              </div>
        </div>

        <!-- right Sidebar -->
        <div class="right-content flex flex-col gap-5">
            <!-- Card -->
            <div class="rounded-[5px] bg-[#1F2B6C]">
                <div class="inline-flex items-center justify-between w-full">

                    <!-- Input -->
                    <input type="text" placeholder="Search"
                        class="w-full rounded-[5px] bg-transparent px-4 py-[14px] text-white placeholder-white font-worksans text-base font-normal leading-[140%] focus:outline-none" />

                    <!-- Button -->
                    <button class="ml-4 inline-flex items-center justify-center px-[20px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                            <path
                                d="M9.88894 18.7779C14.7982 18.7779 18.7779 14.7982 18.7779 9.88894C18.7779 4.97971 14.7982 1 9.88894 1C4.97971 1 1 4.97971 1 9.88894C1 14.7982 4.97971 18.7779 9.88894 18.7779Z"
                                stroke="#BFD2F8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21.0001 21.0001L16.1667 16.1667" stroke="#BFD2F8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                </div>
            </div>

            <!-- Resent Blog Card -->
             <div class="w-[314px] h-[501px] flex-shrink-0 rounded-[5px] border border-[#1F2B6C] bg-white/20 p-[20px]">
                  <h2 class="text-[#1F2B6C] font-yeseva text-[32px] font-normal leading-normal">
                   Recent Posts
                 </h2>
                 <!-- blog post card -->
                  <div class="blog flex flex-col gap-3 mt-4">

                    <!-- news card 1 -->
                    <div class=" flex gap-2 w-[274px] h-[60px] flex-shrink-0 bg-[#FCFEFE] ">
                   <!-- image -->
                   <div class="card-img ">
                    <img src="./src/images/Rectangle 61 (1).png" alt="Team Member 1" class="team-member-photo w-full h-full object-center">
                </div>
                <div class="card-content-wrapper  flex flex-col">
                     <h4 class="text-[#159EEC] font-worksans text-[12px] not-italic font-normal leading-normal">Monday 05, September 2021</h4>
                     <p  class="text-[#212124] font-worksans text-[14px] font-medium leading-normal">This Article’s Title goes Here, but not too long.</p>
                 </div>
                </div>
                           
            </div>

                  </div>

                </div>




        </div>
    </section>


    <?php
 include './common/contactcard.php';

 ?>
 <div class="-mt-5">
 <?php include './common/footer.php';?>
 </div>

</body>

</html>