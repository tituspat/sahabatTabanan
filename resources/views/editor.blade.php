<!doctype html>
<html lang="en" dir="ltr" class="scroll-smooth focus:scroll-auto">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- Meta Tags -->
   <meta name="description" content="This is a page about editors.">
   <meta name="keywords" content="hexadash, web development, UI components">
   <meta name="author" content="dashboardmarket.com">
   <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
   <!-- Title -->
   <title>Editors</title>

   <!-- inject:css-->
   <link rel="stylesheet" href="assets/vendor_assets/css/apexcharts.min.css">
   <link rel="stylesheet" href="assets/vendor_assets/css/datepicker.min.css">
   <link rel="stylesheet" href="assets/vendor_assets/css/line-awesome.min.css">
   <link rel="stylesheet" href="assets/vendor_assets/css/nouislider.min.css">
   <link rel="stylesheet" href="assets/vendor_assets/css/quill.snow.css">
   <link rel="stylesheet" href="assets/vendor_assets/css/svgMap.min.css">
   <link rel="stylesheet" href="tailwind.css">
   <!-- endinject -->

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- Icons -->
   <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>

<body class=" bg-white [&.dark]:bg-main-dark font-jost relative text-[15px] font-normal leading-[1.5] m-0 p-0">
   <!-- Aside -->

   <aside id="asideBar" class="asidebar dark:bg-box-dark fixed start-0 top-0 z-[1035] h-screen overflow-hidden bg-white xl:!w-[280px] xl:[&.collapsed]:!w-[80px] [&.collapsed]:!w-[250px] xl:[&.TopCollapsed]:!w-[0px] [&.TopCollapsed]:!w-[250px] !transition-all !duration-[0.2s] ease-linear delay-[0s] !w-0 xl:[&.collapsed>.logo-wrapper]:w-[80px]">
      <div class="flex w-[280px] border-e border-[#edf2f9] dark:border-box-dark-up logo-wrapper items-center h-[71px] dark:bg-box-dark-up max-xl:hidden">
         <a href="index.html" class="block text-center">
            <div class="logo-full">
               <img class="ps-[27px] dark:hidden" src="images/logos/logo-dark.png" alt="Logo">
               <img class="ps-[27px] hidden dark:block" src="images/logos/logo-white.png" alt="Logo">
            </div>
            <div class="hidden logo-fold">
               <img class="p-[27px] max-w-[80px]" src="images/logos/logo-fold.png" alt="Logo">
            </div>
         </a>
      </div>
      <nav id="navBar" class="navBar dark:bg-box-dark start-0 max-xl:top-[80px] z-[1035] h-full overflow-y-auto bg-white xl:!w-[280px] xl:[&.collapsed]:!w-[80px] [&.collapsed]:!w-[250px] xl:[&.TopCollapsed]:!w-[0px] [&.TopCollapsed]:!w-[250px] !transition-all !duration-[0.2s] ease-linear delay-[0s] !w-0 pb-[100px] scrollbar xl:[&.collapsed]:ps-[7px] relative">
         <ul class="relative m-0 list-none px-[0.2rem] ">
            <li class="relative sub-item-wrapper group ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-apps"></i>
                  </span>
                  <span class="capitalize title">Dashboard</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="index.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">
                        <span>Demo 1</span>
                     </a>
                  </li>
                  <li class="relative">
                     <a href="demo-two.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        2</a>
                  </li>
                  <li class="relative">
                     <a href="demo-three.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        3</a>
                  </li>
                  <li class="relative">
                     <a href="demo-four.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        4</a>
                  </li>
                  <li class="relative">
                     <a href="demo-five.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        5</a>
                  </li>
                  <li class="relative">
                     <a href="demo-six.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        6</a>
                  </li>
                  <li class="relative">
                     <a href="demo-seven.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        7</a>
                  </li>
                  <li class="relative">
                     <a href="demo-eight.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        8</a>
                  </li>
                  <li class="relative">
                     <a href="demo-nine.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        9</a>
                  </li>
                  <li class="relative">
                     <a href="demo-ten.html" class="capitalize rounded-e-[20px] text-gray-600 hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up ">Demo
                        10</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="change-log.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-arrow-growth"></i>
                  </span>
                  <span class="capitalize title">Change log</span>
                  <span class=" arrow-down absolute end-0 me-[0.8rem] ms-auto inline-flex items-center whitespace-nowrap rounded-full bg-info/10 px-[0.65em] pb-[0.25em] pt-[0.30em] text-center align-baseline text-[10px] font-bold leading-none text-info group-[&.active]:hidden">
                     1.0.2
                  </span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <span class="slug dark:text-white/40 mb-[10px] mt-[30px] block px-6 text-[12px] font-medium uppercase text-light">Application</span>
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-apps"></i>
                  </span>
                  <span class="capitalize title">Email</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="inbox.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Inbox</a>
                  </li>
                  <li class="relative">
                     <a href="email.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Read
                        Email</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="chat.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-chat"></i>
                  </span>
                  <span class="capitalize title">Chat</span>
                  <span class=" arrow-down absolute end-0 me-[0.8rem] ms-auto inline-flex items-center whitespace-nowrap rounded-full bg-success px-[0.65em] pb-[0.25em] pt-[0.30em] text-center align-baseline text-[10px] font-bold leading-none text-white group-[&.active]:hidden">
                     3
                  </span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-bag"></i>
                  </span>
                  <span class="title">e-Commerce</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="products.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">product</a>
                  </li>
                  <li class="relative">
                     <a href="product-details.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Product
                        Details</a>
                  </li>
                  <li class="relative">
                     <a href="add-product.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Product
                        Add</a>
                  </li>
                  <li class="relative">
                     <a href="cart.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">cart</a>
                  </li>
                  <li class="relative">
                     <a href="order.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">orders</a>
                  </li>
                  <li class="relative">
                     <a href="sellers.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">sellers</a>
                  </li>
                  <li class="relative">
                     <a href="invoice.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">invoices</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-folder"></i>
                  </span>
                  <span class="capitalize title">project</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="projects.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">project</a>
                  </li>
                  <li class="relative">
                     <a href="project-details.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">project
                        Details</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="calendar.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-calendar-alt"></i>
                  </span>
                  <span class="capitalize title">Calendar</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-at"></i>
                  </span>
                  <span class="capitalize title">contacts</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="contacts.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">contact
                        grid</a>
                  </li>
                  <li class="relative">
                     <a href="contact-list.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">contact
                        list</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="todo.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-check-square"></i>
                  </span>
                  <span class="capitalize title">To-Do</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-exchange"></i>
                  </span>
                  <span class="capitalize title">Import & Export</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="import.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Import</a>
                  </li>
                  <li class="relative">
                     <a href="export.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Export</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-user"></i>
                  </span>
                  <span class="capitalize title">Support App</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="support-ticket.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Support
                        Ticket</a>
                  </li>
                  <li class="relative">
                     <a href="ticket-details.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Ticket
                        Details</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="note.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-check-square"></i>
                  </span>
                  <span class="capitalize title">Note</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-file"></i>
                  </span>
                  <span class="capitalize title">File manager</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="file-manager.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Grid
                        View</a>
                  </li>
                  <li class="relative">
                     <a href="file-manager-list.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">List
                        View</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="task.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-lightbulb"></i>
                  </span>
                  <span class="capitalize title">task</span>
               </a>
            </li>
            <li class="relative">
               <a href="bookmark.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-bookmark"></i>
                  </span>
                  <span class="capitalize title">bookmark</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra  group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-layer-group"></i>
                  </span>
                  <span class="capitalize title">Social app</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="social.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">my
                        profile</a>
                  </li>
                  <li class="relative">
                     <a href="profile-settings.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">profile
                        settings</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <span class="slug dark:text-white/40 mb-[10px] mt-[30px] block px-6 text-[12px] font-medium uppercase text-light">Ui
                  Elements</span>
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-layer-group"></i>
                  </span>
                  <span class="capitalize title">Ui elements</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none group-hover:text-current">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="alerts.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Alerts</a>
                  </li>
                  <li class="relative">
                     <a href="avatars.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">avaters</a>
                  </li>
                  <li class="relative">
                     <a href="badges.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">badges</a>
                  </li>
                  <li class="relative">
                     <a href="buttons.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Buttons</a>
                  </li>
                  <li class="relative">
                     <a href="breadcrumb.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">breadcrumb</a>
                  </li>
                  <li class="relative">
                     <a href="cards.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Cards</a>
                  </li>
                  <li class="relative">
                     <a href="carousel.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Carousel</a>
                  </li>
                  <li class="relative">
                     <a href="checkbox.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Checkbox</a>
                  </li>
                  <li class="relative">
                     <a href="collapse.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Collapse</a>
                  </li>
                  <li class="relative">
                     <a href="comments.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Comments</a>
                  </li>
                  <li class="relative">
                     <a href="dropdown.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Dropdown</a>
                  </li>
                  <li class="relative">
                     <a href="drag-drop.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Drag
                        & drops</a>
                  </li>
                  <li class="relative">
                     <a href="drawer.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">drawer</a>
                  </li>
                  <li class="relative">
                     <a href="empty.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">empty</a>
                  </li>
                  <li class="relative">
                     <a href="grid.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">grid</a>
                  </li>
                  <li class="relative">
                     <a href="input.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">input</a>
                  </li>
                  <li class="relative">
                     <a href="list.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">list</a>
                  </li>
                  <li class="relative">
                     <a href="modal.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Modal</a>
                  </li>
                  <li class="relative">
                     <a href="page-headers.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">page
                        headers</a>
                  </li>
                  <li class="relative">
                     <a href="paginations.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">paginations</a>
                  </li>
                  <li class="relative">
                     <a href="progressbar.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">progressbar</a>
                  </li>
                  <li class="relative">
                     <a href="radio.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">radio</a>
                  </li>
                  <li class="relative">
                     <a href="result.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">result</a>
                  </li>
                  <li class="relative">
                     <a href="select.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">select</a>
                  </li>
                  <li class="relative">
                     <a href="skeleton.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">skeleton</a>
                  </li>
                  <li class="relative">
                     <a href="statistics.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">statistics</a>
                  </li>
                  <li class="relative">
                     <a href="spin.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">spin</a>
                  </li>
                  <li class="relative">
                     <a href="switch.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">switch</a>
                  </li>
                  <li class="relative">
                     <a href="tabs.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">tabs</a>
                  </li>
                  <li class="relative">
                     <a href="tags.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">tags</a>
                  </li>
                  <li class="relative">
                     <a href="typography.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Typography</a>
                  </li>
                  <li class="relative">
                     <a href="timeline.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">timeline</a>
                  </li>
                  <li class="relative">
                     <a href="timeline-2.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">timeline
                        2</a>
                  </li>
                  <li class="relative">
                     <a href="timeline-3.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">timeline
                        3</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <span class="slug dark:text-white/40 mb-[10px] mt-[30px] block px-6 text-[12px] font-medium uppercase text-light">Features</span>
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-chart"></i>
                  </span>
                  <span class="capitalize title">Charts</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="apex-chart.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Apex
                        chart</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-keyhole-circle"></i>
                  </span>
                  <span class="capitalize title">Forms</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="form.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Basics</a>
                  </li>
                  <li class="relative">
                     <a href="form-elements.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Elements</a>
                  </li>
                  <li class="relative">
                     <a href="form-components.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Components</a>
                  </li>
                  <li class="relative">
                     <a href="form-layouts.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Layouts</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-square"></i>
                  </span>
                  <span class="capitalize title">Wizard</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="create-account.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Wizard
                        One</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-icons"></i>
                  </span>
                  <span class="capitalize title">Icons</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="unicons.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Unions</a>
                  </li>
                  <li class="relative">
                     <a href="line-awesome.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">line-Awesome</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="editor.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize  active">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-edit"></i>
                  </span>
                  <span class="capitalize title">Editor</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-map"></i>
                  </span>
                  <span class="capitalize title">Maps</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="vector-map.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Vector
                        Map</a>
                  </li>
                  <li class="relative">
                     <a href="google-map.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Google
                        Map</a>
                  </li>
               </ul>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-table"></i>
                  </span>
                  <span class="capitalize title">table</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="basic-table.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">basic
                        table</a>
                  </li>
                  <li class="relative">
                     <a href="data-table.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">data
                        table</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <span class="slug dark:text-white/40 mb-[10px] mt-[30px] block px-6 text-[12px] font-medium uppercase text-light">Pages</span>
               <a href="gallery.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-images"></i>
                  </span>
                  <span class="capitalize title">Gallery</span>
               </a>
            </li>
            <li class="relative">
               <a href="pricing.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-bill"></i>
                  </span>
                  <span class="capitalize title">Pricing</span>
               </a>
            </li>
            <li class="relative">
               <a href="faq.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-question-circle"></i>
                  </span>
                  <span class="capitalize title">Faq</span>
               </a>
            </li>
            <li class="relative">
               <a href="blank.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-circle"></i>
                  </span>
                  <span class="capitalize title">Blank page</span>
               </a>
            </li>
            <li class="relative">
               <a href="knowledge-base.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-window"></i>
                  </span>
                  <span class="capitalize title">Knowledge-base</span>
               </a>
            </li>
            <li class="relative sub-item-wrapper group  ">
               <a class="group-[.open]:bg-primary/10 rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary dark:active:text-title-dark active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-images"></i>
                  </span>
                  <span class="capitalize title">Blogs</span>
                  <span class=" arrow-down text-gray-600 dark:text-subtitle-dark absolute end-0 me-[0.8rem] ms-auto text-[18px] transition-transform duration-300 ease-linear motion-reduce:transition-none">
                     <i class="uil uil-angle-down"></i>
                  </span>
               </a>
               <ul class="sub-item !visible m-0 hidden list-none p-0 [&.show]:block scrollbar overflow-y-scroll ">
                  <li class="relative">
                     <a href="blog.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Blogs</a>
                  </li>
                  <li class="relative">
                     <a href="blog-two.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Blogs
                        Two</a>
                  </li>
                  <li class="relative">
                     <a href="blog-three.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Blogs
                        Three</a>
                  </li>
                  <li class="relative">
                     <a href="blog-details.html" class="rounded-e-[20px] hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark focus:bg-primary/10 focus:text-inherit active:bg-primary/10 active:text-inherit [&.active]:text-primary focus:text-primary dark:focus:text-title-dark dark:[&.active]:text-title-dark dark:text-subtitle-dark flex cursor-pointer items-center truncate py-[10px] pe-6 ps-[60px] text-[14px] text-body outline-none transition duration-300 ease-linear hover:outline-none focus:outline-none active:outline-none  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up capitalize ">Blogs
                        Details</a>
                  </li>
               </ul>
            </li>
            <li class="relative">
               <a href="terms.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-question-circle"></i>
                  </span>
                  <span class="capitalize title">Terms-conditions</span>
               </a>
            </li>
            <li class="relative">
               <a href="maintenance.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-airplay"></i>
                  </span>
                  <span class="capitalize title">Maintenance</span>
               </a>
            </li>
            <li class="relative">
               <a href="404.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-exclamation-triangle"></i>
                  </span>
                  <span class="capitalize title">404</span>
               </a>
            </li>
            <li class="relative">
               <a href="coming-soon.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-sync"></i>
                  </span>
                  <span class="capitalize title">Coming Soon</span>
               </a>
            </li>
            <li class="relative">
               <a href="log-in.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-signin"></i>
                  </span>
                  <span class="capitalize title">Log in</span>
               </a>
            </li>
            <li class="relative">
               <a href="sign-up.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-sign-out-alt"></i>
                  </span>
                  <span class="capitalize title">Sign Up</span>
               </a>
            </li>
            <li class="relative">
               <a href="reset.html" class="rounded-e-[20px] hover:bg-primary/10 focus:bg-primary/10 active:bg-primary/10 dark:text-subtitle-dark flex h-12 cursor-pointer items-center gap-[16px] truncate px-6 py-4 text-[14px] font-medium text-body outline-none transition duration-300 ease-linear hover:text-primary dark:hover:text-title-dark hover:outline-none focus:text-primary dark:focus:text-title-dark focus:outline-none active:text-primary active:outline-none [&.active]:text-primary dark:[&.active]:text-title-dark  motion-reduce:transition-none dark:hover:bg-box-dark-up dark:focus:bg-box-dark-up dark:active:bg-box-dark-up group capitalize ">
                  <span class="nav-icon dark:text-subtitle-dark text-[18px] text-light-extra group-hover:text-current group-[&.active]:text-current group-focus:text-current">
                     <i class="uil uil-key-skeleton"></i>
                  </span>
                  <span class="capitalize title">Forget password</span>
               </a>
            </li>
         </ul>
      </nav>
   </aside>

   <!-- End: Aside -->

   <!-- Wrapping Content -->
   <div class="relative flex flex-col flex-1 xl:ps-[280px] xl:[&.expanded]:ps-[80px] xl:[&.TopExpanded]:ps-[0px] !transition-all !duration-[0.2s] ease-linear delay-[0s] bg-normalBG dark:bg-main-dark" id="content">
      <!-- Header -->
      <header class="sticky top-0 flex w-full bg-white xl:z-[999] max-xl:z-[9999] drop-shadow-1 dark:bg-box-dark dark:drop-shadow-none min-h-[70px]">
         <!-- Navigation -->
         <div class="flex flex-1 nav-wrap md:ps-[20px] ps-[30px] pe-[30px] max-xs:ps-[15px] max-xs:pe-[15px] bg-white dark:bg-box-dark">
            <!-- Header left menu -->

            <ul class="flex items-center mb-0 list-none nav-left ps-0 gap-x-[14px] gap-y-[9px]">
               <!-- Navigation Items -->
               <li class="xl:hidden xl:[&.flex]:flex" id="topMenu-logo">
                  <div class="flex md:w-[190px] xs:w-[170px] max-xs:w-[100px] max-md:pe-[30px] max-xs:pe-[15px] border-e border-[#edf2f9] dark:border-box-dark-up logo-wrapper items-center h-[71px] dark:bg-box-dark-up">
                     <a href="index.html" class="block text-center">
                        <div class="logo-full">
                           <img class="md:ps-[15px] dark:hidden" src="images/logos/logo-dark.png" alt="Logo">
                           <img class="md:ps-[15px] hidden dark:block" src="images/logos/logo-white.png" alt="Logo">
                        </div>
                     </a>
                  </div>
               </li>
               <li>
                  <a class="flex items-center justify-center sm:min-w-[40px] sm:w-[40px] sm:h-[40px] min-w-[34px] h-[34px] rounded-full bg-transparent hover:bg-primary/10 hover:text-primary dark:hover:text-title-dark dark:hover:bg-box-dark-up group transition duration-200 ease-in-out text-[#525768] dark:text-subtitle-dark max-md:dark:hover:bg-box-dark-up sm:text-[20px] text-[19px] cursor-pointer xl:[&.hide]:hidden max-md:bg-normalBG max-md:dark:bg-box-dark-up max-md:dark:hover:text-subtitle-dark" id="slim-toggler">
                     <i class="uil uil-align-center-alt text-current [&.is-folded]:hidden flex items-center"></i>
                  </a>
               </li>
            </ul>

            <!-- Header Center menu -->

            <div class="relative ps-[30px] hexadash-top-menu hidden xl:[&.flex]:flex" id="topMenuWrapper">
               <ul class="flex flex-wrap items-center 2xl:gap-y-[15px] gap-x-[34px]">
                  <li class="has-subMenu">
                     <a href="#" class="">Dashboard</a>
                     <ul class="subMenu">
                        <li class="">
                           <a href="index.html">Demo 1</a>
                        </li>
                        <li class="">
                           <a href="demo-two.html">Demo 2</a>
                        </li>
                        <li class="">
                           <a href="demo-three.html">Demo 3</a>
                        </li>
                        <li class="">
                           <a href="demo-four.html">Demo 4</a>
                        </li>
                        <li class="">
                           <a href="demo-five.html">Demo 5</a>
                        </li>
                        <li class="">
                           <a href="demo-six.html">Demo 6</a>
                        </li>
                        <li class="">
                           <a href="demo-seven.html">Demo 7</a>
                        </li>
                        <li class="">
                           <a href="demo-eight.html">Demo 8</a>
                        </li>
                        <li class="">
                           <a href="demo-nine.html">Demo 9</a>
                        </li>
                        <li class="">
                           <a href="demo-ten.html">Demo 10</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-subMenu">
                     <a href="#" class="">Apps</a>
                     <ul class="subMenu">
                        <li>
                           <ul>
                              <li class="has-subMenu-left">
                                 <a href="#" class="">
                                    <span class="nav-icon uil uil-envelope"></span>
                                    <span class="menu-text">Email</span>
                                 </a>
                                 <ul class="subMenu">
                                    <li>
                                       <a href="inbox.html" class="">Inbox</a>
                                    </li>
                                    <li>
                                       <a href="email.html" class="">Read
                                          Email</a>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="chat.html" class="">
                                    <span class="nav-icon uil uil-message"></span>
                                    <span class="menu-text">Chat</span>
                                    <span class="text-white bg-success absolute -translate-y-2/4 text-[10px] font-bold min-w-[18px] h-[18px] flex items-center justify-center leading-none rounded-full end-[52px] top-2/4">3</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="calendar.html" class="">
                                    <span class="nav-icon uil uil-calender"></span>
                                    <span class="menu-text">Calendar</span>
                                 </a>
                              </li>
                              <li class="has-subMenu-left">
                                 <a href="#" class="">
                                    <span class="nav-icon uil uil-exchange"></span>
                                    <span class="menu-text">Import & export</span>
                                 </a>
                                 <ul class="subMenu">
                                    <li>
                                       <a class="" href="contact-1.html">Import</a>
                                    </li>
                                    <li>
                                       <a class="" href="contact-2.html">Export</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="has-subMenu">
                     <a href="#" class="active">Features</a>
                     <ul class="subMenu">
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-chart"></span>
                              <span class="menu-text">Charts</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="charts.html">Apex Chart</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-document-layout-left"></span>
                              <span class="menu-text">Froms</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="form.html">Basics</a>
                              </li>
                              <li>
                                 <a class="" href="form-elements.html">Elements</a>
                              </li>
                              <li>
                                 <a class="" href="form-layouts.html">Layouts</a>
                              </li>
                              <li>
                                 <a class="" href="form-components.html">Components</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-square-shape"></span>
                              <span class="menu-text">Wizards</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="create-account.html" class="">Wizard
                                    1</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-icons"></span>
                              <span class="menu-text">Icons</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="unicon-icons.html" class="">Unicon
                                    Icons</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="editors.html" class=" active">
                              <span class="nav-icon uil uil-font"></span>
                              <span class="menu-text">Editors</span>
                           </a>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-map"></span>
                              <span class="menu-text">Maps</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a href="vector-map.html" class="">Vector
                                    Maps</a>
                                 <a href="google-map.html" class="">Google
                                    Maps</a>
                              </li>
                           </ul>
                        </li>
                        <li class="has-subMenu-left">
                           <a href="#" class="">
                              <span class="nav-icon uil uil-table"></span>
                              <span class="menu-text">Table</span>
                           </a>
                           <ul class="subMenu">
                              <li>
                                 <a class="" href="charts.html">Basic table</a>
                              </li>
                              <li>
                                 <a class="" href="charts.html">Data table</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="mega-item has-subMenu">
                     <a href="#" class="">Pages</a>
                     <ul class="megaMenu-wrapper megaMenu-small">
                        <li>
                           <ul>
                              <li>
                                 <a href="change-log.html" class="">
                                    <span class="menu-text">Changelog</span>
                                    <span class="text-white bg-success absolute -translate-y-2/4 text-[10px] font-bold min-w-[18px] h-[18px] flex items-center justify-center leading-none rounded-[20px] end-[52px] top-2/4 px-[6px]">1.0.2</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="gallery.html" class="">
                                    <span class="menu-text">Gallery 1</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="pricing.html" class="">
                                    <span class="menu-text">Pricing</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="faq.html" class="">
                                    <span class="menu-text">FAQ's</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="blank.html" class="">
                                    <span class="menu-text">Blank Page</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="knowledge-base.html" class="">knowledge base</a>
                              </li>
                              <li>
                                 <a href="blog.html" class="">Blog</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <ul>
                              <li>
                                 <a href="blog-two.html" class="">Blog two</a>
                              </li>
                              <li>
                                 <a href="blog-three.html" class="">Blog three</a>
                              </li>
                              <li>
                                 <a href="blog-details.html" class="">Blog details</a>
                              </li>
                              <li>
                                 <a href="terms.html" class="">
                                    <span class="menu-text">Terms & Conditions</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="maintenance.html" class="">
                                    <span class="menu-text">Maintenance</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="404.html" class="">
                                    <span class="menu-text">404</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="coming-soon.html" class="">
                                    <span class="menu-text">Coming Soon</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="log-in.html" class="">
                                    <span class="menu-text">Log In</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="sign-up.html" class="">
                                    <span class="menu-text">Sign Up</span>
                                 </a>
                              </li>
                              <li>
                                 <a href="reset.html" class="">
                                    <span class="menu-text">Forget password</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="mega-item has-subMenu">
                     <a href="#" class="">Components</a>
                     <ul class="megaMenu-wrapper megaMenu-wide">
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="alerts.html">Alert</a>
                              </li>
                              <li>
                                 <a class="" href="avatars.html">Avatar</a>
                              </li>
                              <li>
                                 <a class="" href="badges.html">Badge</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="buttons.html">Button</a>
                              </li>
                              <li>
                                 <a class="" href="cards.html">Cards</a>
                              </li>
                              <li>
                                 <a class="" href="breadcrumbs.html">Breadcrumb</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="carousel.html">Carousel</a>
                              </li>
                              <li>
                                 <a class="" href="checkbox.html">Checkbox</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <span class="mega-title">Components</span>
                           <ul>
                              <li>
                                 <a class="" href="collapse.html">Collapse</a>
                              </li>
                              <li>
                                 <a class="" href="comments.html">typography</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>

            <!-- Header right menu -->

            <div class="flex items-center ms-auto py-[15px] sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] relative">

               <div class="relative">
                  <button type="button" class="transition-all theme-dropdown-trigger text-[20px] text-light dark:text-subtitle-dark [&.close>.uil-search]:hidden [&.close>.uil-multiply]:block">
                     <i class="uil uil-search "></i>
                     <i class="hidden uil uil-multiply "></i>
                  </button>
                  <input type="search" placeholder="search here" id="searchInput" name="search" class="theme-dropdown absolute end-0 transition-[opacity,margin] duration [&.visible]:opacity-100 [&.visible]:block opacity-0 hidden min-w-[15rem] mt-2 dark:bg-box-dark-down p-1.5 h-[48px] px-[20px] dark:shadow-none border-1 border-regular dark:border-box-dark-up rounded-6 capitalize bg-white text-body dark:text-title-dark placeholder:text-body dark:placeholder:text-subtitle-dark text-ellipsis outline-none search-close-icon:appearance-none search-close-icon:w-[20px] search-close-icon:h-[23px] search-close-icon:bg-[url(images/svg/x.svg)] search-close-icon:cursor-pointer">
               </div>

               <button type="button" class="flex xl:hidden items-center text-[22px] text-[#a0a0a0] dark:text-subtitle-dark min-h-[40px]" id="author-dropdown">
                  <i class="uil uil-ellipsis-v text-[18px]"></i>
               </button>
               <ul id="right-ellipsis-trigger" class="xl:flex hidden items-center justify-end flex-auto mb-0 list-none ps-0 sm:gap-x-[25px] max-sm:gap-x-[15px] gap-y-[15px] max-xl:absolute max-xl:z-[1000] max-xl:m-0 max-xl:rounded-lg max-xl:border-none max-xl:bg-white max-xl:bg-clip-padding max-xl:text-left max-xl:shadow-lg max-xl:dark:bg-neutral-700 max-xl:[&.active]:flex max-xl:end-0 max-xl:px-[20px] max-sm:px-[15px] max-xl:py-[10px] max-xl:top-[70px]">
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button id="message" data-te-dropdown-toggle-ref aria-expanded="false" type="button" class="flex items-center text-[22px] text-[#a0a0a0] dark:text-subtitle-dark relative min-h-[40px] group">
                           <i class="uil uil-envelope"></i>
                           <span class="absolute flex w-1.5 h-1.5 translate-x-2/4 -translate-y-2/4 origin-[100%_0%] end-[3px] top-[8px] group-[[data-te-dropdown-show]]:hidden">
                              <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-success/20"></span>
                              <span class="relative inline-flex w-1.5 h-1.5 rounded-full bg-success"></span>
                           </span>
                        </button>
                        <div aria-labelledby="message" data-te-dropdown-menu-ref class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark [&[data-te-dropdown-show]]:block">
                           <div class="bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4 px-[15px] py-[12px] md:min-w-[380px] sm:w-[300px] max-sm:w-[230px]">
                              <h1 class="flex items-center justify-center text-sm rounded-md bg-section dark:bg-box-dark-up h-[50px] p-[10px] text-dark dark:text-title-dark font-semibold">
                                 <span class="title-text">
                                    Messages
                                    <span class="inline-flex items-center justify-center w-5 h-5 text-xs text-white rounded-full ms-[8px] bg-success dark:text-title-dark">
                                       3
                                    </span>
                                 </span>
                              </h1>
                              <ul class="p-0 max-h-[250px] relative overflow-x-hidden overflow-y-auto scrollbar">

                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-light w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/app-developer.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                App developer
                                                <span class="text-xs font-normal text-text-light">2.5 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-light dark:text-white/[.87 text-10">3</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-success w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/product.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                Product manager
                                                <span class="text-xs font-normal text-text-success">2.5 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-success dark:text-white/[.87 text-10">3</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-success w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/ui-ux-design.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                UI UX Designing
                                                <span class="text-xs font-normal text-text-success">6 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-success dark:text-white/[.87 text-10">3</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-warning w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/web-design-software-engineering.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                Software Development
                                                <span class="text-xs font-normal text-text-warning">3 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-warning dark:text-white/[.87 text-10">3</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-success w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/firecircle-icon-graphic-branding-graphic-design-large-white.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                Designing Services
                                                <span class="text-xs font-normal text-text-success">1.30 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-success dark:text-white/[.87 text-10">2</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark transition-[0.3s] hover:text-primary hover:bg-white dark:hover:bg-white/[.06] hover:shadow-custom dark:shadow-none dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.20)] dark:rounded-4">
                                       <figure class="inline-flex w-full mb-0 align-top sm:gap-x-[16px] gap-y-[8px] max-sm:flex-wrap">
                                          <div class="text-warning w-[40px] min-w-[40px] h-[40px] rounded-full relative">
                                             <span class="bg-current absolute content-[''] w-[12px] h-[12px] rounded-full border-2 border-white right-0 bottom-0" *ngif="!messages.isRead"></span>
                                             <img class="object-cover w-[40px] h-[40px] bg-light-extra rounded-full" src="images/messages/app.png">
                                          </div>
                                          <figcaption class="w-full -mt-1 text-start">
                                             <h1 class="flex items-center justify-between mb-0.5 text-sm text-current font-semibold">
                                                App Development
                                                <span class="text-xs font-normal text-text-warning">2 hrs ago</span>
                                             </h1>
                                             <div class="flex items-center gap-[30px] text-start">
                                                <span class="ps-0 min-w-[216px] text-body dark:text-subtitle-dark">Lorem ipsum
                                                   dolor amet cosec...</span>
                                                <span class="inline-flex items-center justify-center w-4 h-4 text-white rounded-full bg-warning dark:text-white/[.87 text-10">1</span>
                                             </div>
                                          </figcaption>
                                       </figure>
                                    </div>
                                 </li>
                              </ul>
                              <a class="flex items-center justify-center text-[13px] font-medium bg-normalBG dark:bg-box-dark-up h-[50px] text-light hover:text-primary dark:hover:text-subtitle-dark dark:text-title-dark mx-[-15px] mb-[-15px] rounded-b-6" href="#">
                                 See all messages
                              </a>
                           </div>
                        </div>
                     </div>

                  </li>
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button type="button" id="notification" data-te-dropdown-toggle-ref aria-expanded="false" class="flex items-center hs-dropdown-toggle text-[23px] text-[#a0a0a0] dark:text-subtitle-dark relative min-h-[40px] group">
                           <i class="uil uil-bell"></i>
                           <span class="absolute flex w-1.5 h-1.5 translate-x-2/4 -translate-y-2/4 origin-[100%_0%] end-[3px] top-[8px] group-[[data-te-dropdown-show]]:hidden">
                              <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-warning/20"></span>
                              <span class="relative inline-flex w-1.5 h-1.5 rounded-full bg-warning"></span>
                           </span>
                        </button>
                        <div aria-labelledby="notification" data-te-dropdown-menu-ref class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block">
                           <div class="bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4 px-[15px] py-[12px] md:min-w-[400px] sm:w-[300px] max-sm:w-[230px]">
                              <h1 class="flex items-center justify-center text-sm rounded-md bg-section dark:bg-box-dark-up h-[50px] p-[10px] text-dark dark:text-title-dark font-semibold">
                                 <span class="title-text me-2.5">Notifications<span class="inline-flex items-center justify-center w-5 h-5 text-xs text-white rounded-full bg-warning ms-3 dark:text-title-dark">3</span></span>
                              </h1>
                              <ul class="p-0 max-h-[250px] relative overflow-x-hidden overflow-y-auto scrollbar">
                                 <li class="w-full sm:mb-0 mb-[10px]">
                                    <button class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark hover:bg-white dark:hover:bg-box-dark-up hover:shadow-custom dark:shadow-none dark:rounded-4">
                                       <div class="flex items-start gap-x-[15px] gap-y-[5px] flex-wrap max-xs:flex-col">
                                          <div class="flex items-center justify-center rounded-full w-[30px] h-[30px] bg-warning/10 text-warning">
                                             <i class="text-current uil uil-heart text-[16px]"></i>
                                          </div>
                                          <div class="flex items-center justify-between flex-1">
                                             <div class="text-start">
                                                <h1 class="flex items-center justify-between mb-0.5 text-[#5a5f7d] dark:text-title-dark text-sm font-normal flex-wrap">
                                                   <span class="text-primary me-1.5 font-medium">Ibrahim Riaz</span>
                                                   sent you a message
                                                </h1>
                                                <p class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                                   3 hours ago
                                                </p>
                                             </div>
                                             <div><span class="inline-flex items-center justify-center bg-warning w-1.5 h-1.5 ms-3 rounded-full"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </button>
                                 </li>
                                 <li class="w-full sm:mb-0 mb-[10px]">
                                    <button class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark hover:bg-white dark:hover:bg-box-dark-up hover:shadow-custom dark:shadow-none dark:rounded-4">
                                       <div class="flex items-start gap-x-[15px] gap-y-[5px] flex-wrap max-xs:flex-col">
                                          <div class="flex items-center justify-center rounded-full w-[30px] h-[30px] bg-primary/10 text-primary">
                                             <i class="text-current uil uil-inbox text-[16px]"></i>
                                          </div>
                                          <div class="flex items-center justify-between flex-1">
                                             <div class="text-start">
                                                <h1 class="flex items-center justify-between mb-0.5 text-[#5a5f7d] dark:text-title-dark text-sm font-normal flex-wrap">
                                                   <span class="text-primary me-1.5 font-medium">Shamim Ahmed</span>
                                                   sent you a message
                                                </h1>
                                                <p class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                                   3 hours ago
                                                </p>
                                             </div>
                                             <div><span class="inline-flex items-center justify-center bg-primary w-1.5 h-1.5 ms-3 rounded-full"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </button>
                                 </li>
                                 <li class="w-full sm:mb-0 mb-[10px]">
                                    <button class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark hover:bg-white dark:hover:bg-box-dark-up hover:shadow-custom dark:shadow-none dark:rounded-4">
                                       <div class="flex items-start gap-x-[15px] gap-y-[5px] flex-wrap max-xs:flex-col">
                                          <div class="flex items-center justify-center rounded-full w-[30px] h-[30px] bg-secondary/10 text-secondary">
                                             <i class="text-current uil uil-upload text-[16px]"></i>
                                          </div>
                                          <div class="flex items-center justify-between flex-1">
                                             <div class="text-start">
                                                <h1 class="flex items-center justify-between mb-0.5 text-[#5a5f7d] dark:text-title-dark text-sm font-normal flex-wrap">
                                                   <span class="text-primary me-1.5 font-medium">Tanjim Ahmed</span>
                                                   sent you a message
                                                </h1>
                                                <p class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                                   2 hours ago
                                                </p>
                                             </div>
                                             <div><span class="inline-flex items-center justify-center bg-secondary w-1.5 h-1.5 ms-3 rounded-full"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </button>
                                 </li>
                                 <li class="w-full sm:mb-0 mb-[10px]">
                                    <button class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark hover:bg-white dark:hover:bg-box-dark-up hover:shadow-custom dark:shadow-none dark:rounded-4">
                                       <div class="flex items-start gap-x-[15px] gap-y-[5px] flex-wrap max-xs:flex-col">
                                          <div class="flex items-center justify-center rounded-full w-[30px] h-[30px] bg-info/10 text-info">
                                             <i class="text-current uil uil-signout text-[16px]"></i>
                                          </div>
                                          <div class="flex items-center justify-between flex-1">
                                             <div class="text-start">
                                                <h1 class="flex items-center justify-between mb-0.5 text-[#5a5f7d] dark:text-title-dark text-sm font-normal flex-wrap">
                                                   <span class="text-primary me-1.5 font-medium">Masud Rana</span>
                                                   sent you a message
                                                </h1>
                                                <p class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                                   9 hours ago
                                                </p>
                                             </div>
                                             <div><span class="inline-flex items-center justify-center bg-info w-1.5 h-1.5 ms-3 rounded-full"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </button>
                                 </li>
                                 <li class="w-full sm:mb-0 mb-[10px]">
                                    <button class="group relative block w-full px-3 sm:py-3.5 max-sm:py-1.5 text-body dark:text-subtitle-dark hover:bg-white dark:hover:bg-box-dark-up hover:shadow-custom dark:shadow-none dark:rounded-4">
                                       <div class="flex items-start gap-x-[15px] gap-y-[5px] flex-wrap max-xs:flex-col">
                                          <div class="flex items-center justify-center rounded-full w-[30px] h-[30px] bg-danger/10 text-danger">
                                             <i class="text-current uil uil-at text-[16px]"></i>
                                          </div>
                                          <div class="flex items-center justify-between flex-1">
                                             <div class="text-start">
                                                <h1 class="flex items-center justify-between mb-0.5 text-[#5a5f7d] dark:text-title-dark text-sm font-normal flex-wrap">
                                                   <span class="text-primary me-1.5 font-medium">Abdur Rahim</span>
                                                   sent you a message
                                                </h1>
                                                <p class="mb-0 text-xs text-body dark:text-subtitle-dark">
                                                   1 min ago
                                                </p>
                                             </div>
                                             <div><span class="inline-flex items-center justify-center bg-danger w-1.5 h-1.5 ms-3 rounded-full"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </button>
                                 </li>
                              </ul>
                              <a class="flex items-center justify-center text-[13px] font-medium bg-normalBG dark:bg-box-dark-up h-[50px] text-light hover:text-primary dark:hover:text-subtitle-dark dark:text-title-dark mx-[-15px] mb-[-15px] rounded-b-6" href="#">See all incoming activity</a>
                           </div>
                        </div>
                     </div>

                  </li>
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button type="button" id="settings" data-te-dropdown-toggle-ref aria-expanded="false" class="flex items-center text-[22px] text-[#a0a0a0] dark:text-subtitle-dark min-h-[40px]">
                           <i class="uil uil-setting"></i>
                        </button>
                        <div class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block" aria-labelledby="settings" data-te-dropdown-menu-ref>
                           <div class="lg:w-[700px] md:w-[300px] max-md:w-[230px] px-[15px] py-[15px] bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4">
                              <ul class="flex flex-wrap items-center lg:[&>li]:flex-[50%] max-lg:[&>li]:flex-[100%] max-h-[251px] relative overflow-x-hidden overflow-y-auto scrollbar scrollbar">

                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/audio.png" alt="audio">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             Diagram Maker</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Plan user flows & test scenarios </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/payment.png" alt="payment">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             payments</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">We handle billions of dollars </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/feature.png" alt="feature">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             All Features</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Introducing Increment subscriptions </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/theme.png" alt="theme">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             Themes</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Third party themes that are compatible
                                          </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/payment.png" alt="payment">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             payments</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">We handle billions of dollars </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/design.png" alt="design">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             Design Mockups</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Share planning visuals with clients </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/file.png" alt="file">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             Content Planner</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Centralize content gathering and editing
                                          </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                                 <li class="w-full">
                                    <figure class="flex items-start px-4 py-3 mb-0 hover:shadow-action dark:hover:shadow-[0_5px_30px_rgba(1,4,19,.60)]">
                                       <img class="h-fit me-4" src="images/settings/audio.png" alt="audio">
                                       <figcaption>
                                          <h1 class="mb-0.5 -mt-1 text-[15px] font-medium capitalize text-dark dark:text-title-dark text-start">
                                             Diagram Maker</h1>
                                          <p class="mb-0 text-body dark:text-subtitle-dark text-start">Plan user flows & test scenarios </p>
                                       </figcaption>
                                    </figure>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                  </li>
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button id="flags" data-te-dropdown-toggle-ref aria-expanded="false" type="button" class="flex items-center">
                           <img class="min-w-[20px] min-h-[20px]" src="images/flags/english.png" alt="flags">
                        </button>
                        <div class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block" aria-labelledby="flags" data-te-dropdown-menu-ref>
                           <ul class="block bg-white dark:bg-box-dark-down w-[100px] shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4 overflow-hidden">
                              <li class="bg-white dark:bg-box-dark-down hover:bg-primary/10 dark:hover:bg-primary/10">
                                 <button class="flex items-center px-3 py-1.5 text-sm text-dark dark:text-subtitle-dark">
                                    <img class="w-3.5 h-3.5 me-2" src="images/flags/english.png" alt="english">
                                    <span>English</span>
                                 </button>
                              </li>
                              <li class="bg-white dark:bg-box-dark-down hover:bg-primary/10 dark:hover:bg-primary/10">
                                 <button class="flex items-center px-3 py-1.5 text-sm text-dark dark:text-subtitle-dark">
                                    <img class="w-3.5 h-3.5 me-2" src="images/flags/spanish.png" alt="spanish">
                                    <span>Spanish</span>
                                 </button>
                              </li>
                              <li class="bg-white dark:bg-box-dark-down hover:bg-primary/10 dark:hover:bg-primary/10">
                                 <button class="flex items-center px-3 py-1.5 text-sm text-dark dark:text-subtitle-dark">
                                    <img class="w-3.5 h-3.5 me-2" src="images/flags/arabic.png" alt="arabic">
                                    <span>Arabic</span>
                                 </button>
                              </li>
                           </ul>
                        </div>
                     </div>

                  </li>
                  <li>

                     <div class="relative" data-te-dropdown-ref>
                        <button type="button" id="author-dropdown" data-te-dropdown-toggle-ref aria-expanded="false" class="flex items-center me-1.5 text-body dark:text-subtitle-dark text-sm font-medium capitalize rounded-full md:me-0 group whitespace-nowrap">
                           <span class="sr-only">Open user menu</span>
                           <img class="min-w-[32px] w-8 h-8 rounded-full xl:me-2" src="images/avatars/thumbs.png" alt="user photo">
                           <span class="hidden xl:block">Shamim Ahmed</span>
                           <i class="uil uil-angle-down text-light dark:text-subtitle-dark text-[18px] hidden xl:block"></i>
                        </button>

                        <!-- Dropdown menu -->
                        <div class="absolute z-[1000] ltr:float-left rtl:float-right m-0 hidden min-w-max list-none overflow-hidden rounded-lg border-none bg-white bg-clip-padding text-left text-base shadow-lg dark:shadow-boxLargeDark dark:bg-box-dark-down  [&[data-te-dropdown-show]]:block" aria-labelledby="author-dropdown" data-te-dropdown-menu-ref>
                           <div class="min-w-[310px] max-sm:min-w-full pt-4 px-[15px] py-[12px] bg-white dark:bg-box-dark shadow-[0_2px_8px_rgba(0,0,0,.15)] dark:shadow-[0_5px_30px_rgba(1,4,19,.60)] rounded-4">
                              <figure class="flex items-center text-sm rounded-[8px] bg-section dark:bg-box-dark-up py-[20px] px-[25px] mb-[12px] gap-[15px]">
                                 <img class="w-8 h-8 rounded-full bg-regular" src="images/avatars/thumbs.png" alt="user">
                                 <figcaption>
                                    <div class="text-dark dark:text-title-dark mb-0.5 text-sm">Shamim Ahmed</div>
                                    <div class="mb-0 text-xs text-body dark:text-subtitle-dark">Software Engineer</div>
                                 </figcaption>
                              </figure>
                              <ul class="m-0 pb-[10px] overflow-x-hidden overflow-y-auto scrollbar bg-transparent max-h-[230px]">

                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-user"></i>
                                          Profile
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-setting"></i>
                                          Settings
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-key-skeleton"></i>
                                          Billing
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-users-alt"></i>
                                          Activity
                                       </button>
                                    </div>
                                 </li>
                                 <li class="w-full">
                                    <div class="p-0 dark:hover:text-white hover:bg-primary/10 dark:hover:bg-box-dark-up rounded-4">
                                       <button class="inline-flex items-center text-light dark:text-subtitle-dark hover:text-primary hover:ps-6 w-full px-2.5 py-3 text-sm transition-[0.3s] gap-[10px]">
                                          <i class="text-[16px] uil uil-bell"></i>
                                          Help
                                       </button>
                                    </div>
                                 </li>
                              </ul>
                              <a class="flex items-center justify-center text-sm font-medium bg-normalBG dark:bg-box-dark-up h-[50px] text-light hover:text-primary dark:hover:text-subtitle-dark dark:text-title-dark mx-[-15px] mb-[-15px] rounded-b-6 gap-[6px]" href="log-in.html">
                                 <i class="uil uil-sign-out-alt"></i> Sign Out</a>
                           </div>
                        </div>
                     </div>


                  </li>
               </ul>
            </div>

         </div>
         <!-- End: Navigation -->
      </header>
      <!-- End: Header -->

      <!-- Main Content -->
      <main class="bg-normalBG dark:bg-main-dark">
         <div class=" mx-[30px] min-h-[calc(100vh-195px)] mb-[30px] ssm:mt-[30px] mt-[15px]">

            <div class="grid grid-cols-12 gap-5">
               <div class="col-span-12">

                  <!-- Breadcrumb Section -->
                  <div class="leading-[1.8571428571] flex flex-wrap sm:justify-between justify-center items-center ssm:mb-[33px] mb-[18px] max-sm:flex-col gap-x-[15px] gap-y-[5px]">
                     <!-- Title -->
                     <h4 class="capitalize text-[20px] text-dark dark:text-title-dark font-semibold">editors</h4>
                     <!-- Breadcrumb Navigation -->
                     <div class="flex flex-wrap justify-center">
                        <nav>
                           <ol class="flex flex-wrap p-0 mb-0 list-none gap-[8px] max-sm:justify-center">
                              <!-- Parent Link -->
                              <li class="inline-flex items-center">
                                 <a class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 hover:text-primary group" href="index.html">
                                    <i class="uil uil-estate text-light dark:text-white/50 me-[8px] text-[16px] group-hover:text-current"></i>Dashboard</a>
                              </li>
                              <!-- Middle (Conditional) -->

                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]">
                                 <span class="text-[14px] font-normal leading-[20px] text-body dark:text-neutral-200 transition duration-300 capitalize">features</span>
                              </li>

                              <!-- Child (Current Page) -->
                              <li class="inline-flex items-center before:content-[''] before:w-1 before:h-1 before:ltr:float-left rtl:float-right before:bg-light-extra before:me-[7px] before:pe-0 before:rounded-[50%]" aria-current="page">
                                 <span class="text-[14px] font-normal leading-[20px] flex items-center capitalize text-light dark:text-subtitle-dark">editors</span>
                              </li>
                           </ol>
                        </nav>
                     </div>
                  </div>

               </div>
            </div>
            <div class="grid grid-cols-12">
               <div class="col-span-12 mb-[30px]">
                  <div class="relative p-0 m-0 bg-white dark:bg-box-dark rounded-10 pb-[40px]">
                     <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mx-[25px] mt-0 border-b border-regular dark:border-box-dark-up">
                        <div class="editorMessage h-[200px]"></div>
                     </div>
                  </div>
               </div>
               <div class="col-span-12 mb-[30px]">
                  <div class="relative p-0 m-0 bg-white dark:bg-box-dark rounded-10">
                     <div class="py-[30px] px-[30px] max-3xl:h-[300px] max-md:h-[245px] overflow-x-auto">
                        <div class="static w-full rounded-10 z-998">
                           <div class="relative flex items-center justify-between w-full border-b border-regular dark:border-box-dark-up">
                              <div class="relative flex items-center gap-2.5 min-h-[50px] w-full border-0 border-t border-regular dark:border-box-dark-up">
                                 <div data-te-chips-input-init data-te-chips-placeholder class="mb-0 min-h-[50px] border-none pb-0 shadow-none outline-none transition-all duration-300 ease-[cubic-bezier(0.25,0.1,0.25,1)] hover:cursor-text w-full [&>div>label]:hidden [&>div>.group>div]:border-0 [&>div>input]:h-[50px]" data-te-editable="true"></div>
                              </div>
                              <span class="absolute ltr:right-[30px] rtl:left-[30px] top-1/2 -translate-y-1/2 text-light dark:text-title-dark">Cc</span>
                           </div>
                        </div>
                        <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mt-0">
                           <div class="editorCompose h-[260px]"></div>
                        </div>
                        <div class="flex items-center justify-between pt-[30px] border-t border-regular dark:border-box-dark-up ">
                           <div class="flex items-center gap-[15px]">
                              <button type="button" class="h-[44px] px-[20px] rounded-4 bg-primary text-white border-primary">
                                 Send
                              </button>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-link"></i>
                              </a>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-smile"></i>
                              </a>
                           </div>
                           <button type="button" class="text-[15px] text-body dark:text-subtitle-dark hover:text-primary bg-transparent border-none">
                              <i class="uil uil-trash"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-span-12">
                  <div class="bg-white dark:bg-box-dark w-full rounded-[10px]">
                     <div class="flex items-center justify-between bg-dark dark:bg-box-dark-up p-5 text-white dark:text-title-dark rounded-tl-10 rounded-tr-10">
                        <h6 class="text-white dark:text-title-dark">New message</h6>
                        <div class="flex items-center gap-[10px]">
                           <button type="button" class="full-window-trigger text-white bg-transparent border-none dark:text-title-dark screen flex items-center">
                              <i class="hidden uil uil-compress-arrows"></i>
                              <i class="uil uil-expand-arrows"></i>
                           </button>
                           <button type="button" class="email-overlay-message-close text-white bg-transparent border-none dark:text-title-dark screen flex items-center">
                              <i class="uil uil-multiply"></i>
                           </button>
                        </div>
                     </div>
                     <div class="pb-[30px] px-[30px] max-3xl:h-[300px] max-md:h-[245px] overflow-x-auto">
                        <div class="static w-full rounded-10 z-998">
                           <div class="relative flex items-center gap-2.5 border-b border-regular dark:border-box-dark-up w-full min-h-[50px]">
                              <input type="email" placeholder="Subject" class="text-dark dark:text-title-dark border-none bg-white dark:bg-box-dark shadow-none placeholder:text-body dark:placeholder:text-subtitle-dark w-full outline-none">
                           </div>
                           <div class="relative flex items-center justify-between w-full border-b border-regular dark:border-box-dark-up">
                              <div class="relative flex items-center gap-2.5 min-h-[50px] w-full">
                                 <input type="email" placeholder="Reply to" class=" text-dark dark:text-title-dark border-none bg-white dark:bg-box-dark shadow-none placeholder:text-body dark:placeholder:text-subtitle-dark w-full outline-none">
                              </div>
                              <span class="absolute ltr:right-[30px] rtl:left-[30px] top-1/2 -translate-y-1/2 text-light dark:text-title-dark">Cc</span>
                           </div>
                           <div class="relative [&>.tox]:border-0 [&>.tox~.tox-menubar]:bg-transparen [&>.ql-toolbar]:py-[15px] mt-0">
                              <div class="editorMessage-two h-[200px]"></div>
                           </div>
                        </div>
                        <div class="flex items-center justify-between pt-[30px] border-t border-regular dark:border-box-dark-up">
                           <div class="flex items-center gap-[15px]">
                              <button type="button" class="h-[44px] px-[20px] rounded-4 bg-primary text-white border-primary">
                                 Send
                              </button>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-link"></i>
                              </a>
                              <a href="#" class="text-[13px] text-body dark:text-subtitle-dark hover:text-primary">
                                 <i class="uil uil-smile"></i>
                              </a>
                           </div>
                           <button type="button" class="text-[15px] text-body dark:text-subtitle-dark hover:text-primary bg-transparent border-none">
                              <i class="uil uil-trash"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>

         <!-- Footer -->
         <footer class="px-[25px] bg-white dark:bg-box-dark">

            <!-- Footer content -->
            <div class="flex justify-between flex-wrap py-[22px] gap-x-[30px] gap-y-[15px] max-ssm:gap-y-[8px] items-center max-md:flex-col">
               <!-- Copyright information -->
               <div class="flex items-center gap-[4px] text-[14px] font-medium max-md:text-center text-body dark:text-subtitle-dark">© <span class="current-year">2022</span> <a href="#" class="text-primary">SovWare</a></div>

               <!-- Footer navigation links -->
               <div class="justify-end md:justify-center items-center flex gap-[15px]">
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">About</a>
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">Team</a>
                  <a href="#" class="text-body dark:text-subtitle-dark text-[14px] hover:text-primary dark:hover:text-title-dark">Contact</a>
               </div>
            </div>

         </footer>
         <!-- end: Footer -->
      </main>
      <!-- End: Main Content -->
   </div>
   <!-- End: Wrapping Content -->

   <!-- Customizing option -->

   <!-- End: Customizing option -->

   <!-- Preloader -->

   <div class="preloader fixed w-full h-full z-[9999] flex items-center justify-center top-0 bg-white dark:bg-black">
      <div class="animate-spin inline-block w-[50px] h-[50px] border-[3px] border-current border-t-transparent text-primary rounded-full" role="status" aria-label="loading">
         <span class="sr-only">Loading...</span>
      </div>
   </div>

   <!-- End: Preloader -->

   <!-- inject:js-->
   <script src="assets/vendor_assets/js/apexcharts.min.js"></script>
   <script src="assets/vendor_assets/js/datepicker-full.min.js"></script>
   <script src="assets/vendor_assets/js/fslightbox.js"></script>
   <script src="assets/vendor_assets/js/index.global.min.js"></script>
   <script src="assets/vendor_assets/js/mixitup.min.js"></script>
   <script src="assets/vendor_assets/js/moment.min.js"></script>
   <script src="assets/vendor_assets/js/nouislider.min.js"></script>
   <script src="assets/vendor_assets/js/quill.js"></script>
   <script src="assets/vendor_assets/js/svg-pan-zoom.min.js"></script>
   <script src="assets/vendor_assets/js/svgMap.min.js"></script>
   <script src="assets/vendor_assets/js/tw-elements.umd.min.js"></script>
   <script src="assets/vendor_assets/js/yscountdown.min.js"></script>
   <script src="assets/theme_assets/js/apex-custom.js"></script>
   <script src="assets/theme_assets/js/full-calendar.js"></script>
   <script src="assets/theme_assets/js/googlemap-init.js"></script>
   <script src="assets/theme_assets/js/main.js"></script>
   <script src="assets/theme_assets/js/svgMapData.js"></script>
   <!-- endinject-->
</body>

</html>