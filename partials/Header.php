<?php
  session_start();
  // college
  define('BASE_PATH', 'http://localhost/my_clyde_dev/');
  // home
  // define('BASE_PATH', 'http://localhost:8040/my_clyde_dev/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Clyde - Student App</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="">
  <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
  <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
      <div class="flex flex-row items-center justify-between p-4">
        <img src="<?= BASE_PATH ?>assets/images/myclydelogo.png" alt="" width="250px">
        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
          <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
            <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
  
      <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
          <div class="flex items-center space-x-5 hidden md:flex">
            <!-- user navigation -->
            <?php if(!isset($_SESSION['loggedin'])) : ?>
             <!-- Login -->
             <a href="<?= BASE_PATH ?>login"
                    class="flex text-gray-600 cursor-pointer transition-colors duration-300 font-semibold text-blue-600" href="">
                    <svg
                        class="fill-current h-5 w-5 mr-2 mt-0.5"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M10,17V14H3V10H10V7L15,12L10,17M10,2H19A2,2 0 0,1 21,4V20A2,2 0 0,1 19,22H10A2,2 0 0,1 8,20V18H10V20H19V4H10V6H8V4A2,2 0 0,1 10,2Z" />
                    </svg>
                    Login
                </a>
                <!-- Register -->
                <a href="<?= BASE_PATH ?>register"
                    class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300" href="">
                    <svg
                        class="fill-current h-5 w-5 mr-2 mt-0.5"
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 0L11.34 .03L15.15 3.84L16.5 2.5C19.75 4.07 22.09 7.24 22.45 11H23.95C23.44 4.84 18.29 0 12 0M12 4C10.07 4 8.5 5.57 8.5 7.5C8.5 9.43 10.07 11 12 11C13.93 11 15.5 9.43 15.5 7.5C15.5 5.57 13.93 4 12 4M12 6C12.83 6 13.5 6.67 13.5 7.5C13.5 8.33 12.83 9 12 9C11.17 9 10.5 8.33 10.5 7.5C10.5 6.67 11.17 6 12 6M.05 13C.56 19.16 5.71 24 12 24L12.66 23.97L8.85 20.16L7.5 21.5C4.25 19.94 1.91 16.76 1.55 13H.05M12 13C8.13 13 5 14.57 5 16.5V18H19V16.5C19 14.57 15.87 13 12 13M12 15C14.11 15 15.61 15.53 16.39 16H7.61C8.39 15.53 9.89 15 12 15Z" />
                    </svg>
                    Register
                </a>
                <?php elseif(isset($_SESSION['student_num'])) : ?>
                  <a href="<?= BASE_PATH ?>s/dashboard">Dashboard</a>
                  <a href="<?= BASE_PATH ?>s/course">My Course</a>
                  <a href="<?= BASE_PATH ?>s/account"> My Details</a>
                  <a href="<?= BASE_PATH ?>news"> News</a>
                  <a href="<?= BASE_PATH ?>events"> Events</a>
                  <a href="<?= BASE_PATH ?>logout" class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300" href="">Logout </a>
                  <?php elseif(isset($_SESSION['admin'])) : ?>
                    <a href="">admin login</a>
                    <a href="<?= BASE_PATH ?>logout"
                    class="flex text-gray-600 hover:text-blue-500 cursor-pointer transition-colors duration-300" href="">
                    

                    Logout
                </a>

                <?php endif ?>
                

               
            </div>  
          
    
      </nav>
    </div>
  </div>
</div>
</div>
    
