<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css"  rel="stylesheet" />
   
        <!-- ----------jquery--------- -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>
            <link rel="icon" type="image/x-icon" href="A-1_img/logo/fav_logo-removebg-preview.png" width="">
    <title><?php $title ?></title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
    /* font-family: 'Poppins', sans-serif; */
    font-family: "Barlow",Arial,Helvetica,sans-serif;
}
        .container-2
        {width: 90%;
        margin: auto;
    }

    #navbar {
        scroll-margin-top: 20px;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.7s;
}

    .nav-color{
        /* background-color: #b30000; */
        padding: 0  20px;
       
    }

        .menu:hover .Sub-Menu {
            display: block;
        }

       
        .menu:hover .sub-menu-it-services{
            display: block;
        }

        .menu:hover .sub-menu-web-services{
            display: block;
        }
        .menu .sub-menu-it-services{
           
            border: #fbf9f9 2px solid;
        }

        .menu:hover .Sub-Menu{
       
            border: #fbf9f9 2px solid;
        }

        .menu a{ 
            position: relative;
        }
       


    
        .ham-icon{display: none;}
        
        @media only screen and (max-width:1100px){
            #nav-menu{
            display: none;       
            /* position: absolute;
            left: 0;
            top: 120px;
            width: 100%; */
        }
        #contact{
         display: none; 
        }
        .ham-icon{display: block;
        font-size: 24px;}
        .menu-item{
            background-color: rgb(8,47,73);
            flex-direction: column;
           width: 100% ;
        }
        .active2{
            /* content:"";
            position: absolute; */
            background-color: rgb(56,45,94);
            color:white;
            /* height: 2px;
            width: 10px;
            left: -15px;
            bottom: 17px;
            transition: 0.3s; */
         }
      
        }

         .active2:after{
            content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 10px;
            left: -15px;
            bottom: 17px;
            transition: 0.3s;
         }
          
    </style>
</head>
<body>
    
    <div id="navbar" class="nav-color fixed w-full bg-white z-50">
    <nav class="relative flex text-gray-300 justify-between items-center py-1 " >
        <div>
            <a href="index"><img src="A-1_img/logo/A-1_LOGO-transparent-png-removebg-preview.png" alt="" class="w-48"></a>
        </div>
        <div class="flex items-center">
        <div id="nav-menu">
            <ul class="nav flex text-lg menu-item font-base text-black">
           <li class="menu relative "><a href="index.php" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="index.php"?"active2":"")?>">Home</a></li>
         
           <li class="menu relative "><a href="our_Vission.php" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="our_Vission.php"?"active2":"")?>">Our Vission</a></li>
           <li class="menu relative "><a href="services.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="services.php"?"active2":"")?>">Services</a>
            </li>
          
            <li class="menu relative "><a href="careers.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="careers.php"?"active2":"")?>">Careers</a></li>
            <li class="menu relative "><a href="contact_us.php"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="contact_us.php"?"active2":"")?>">Contact Us</a></li>
         </ul>
        </div>
        <div>
         <button id="contact" class="bg-[rgb(56,45,94)] p-2 text-lg rounded-3xl font-semibold text-white"><a href="tel:+919819189901"><span><i class="fa-solid fa-phone"></i></span> +919819189901</a></button>
         </div>
         </div>
        <div  class="ham-icon" >
            <button class="p-1.5 text-[rgb(56,45,94)] font-bold" type="button" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"><i class="fa fa-bars"></i></button>
        </div>
       
     </nav> 
</div> 
    

<!-- drawer component -->
<div id="drawer-navigation" class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
    <div id="drawer-navigation-label"><a href="index.php"><img src="A-1_img/logo/A-1_LOGO-transparent-png-removebg-preview.png" alt="" class="w-48"></a></div>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
  <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="home.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-black <?php echo(basename($_SERVER['PHP_SELF'])=="home.php"?"active2":"")?>">
               <span class="flex-1 ml-3 whitespace-nowrap">Home</span>
            </a>
         </li>
        
         <li>
            <a href="our_Vission.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-black <?php echo(basename($_SERVER['PHP_SELF'])=="our_Vission.php"?"active2":"")?>">
               <span class="flex-1 ml-3 whitespace-nowrap">Our Vission</span>
            </a>
         </li>
         <li>
           <a href="services.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-black <?php echo(basename($_SERVER['PHP_SELF'])=="services.php"?"active2":"")?>">
               <span class="flex-1 ml-3 whitespace-nowrap">Services</span>
            </a>
         </li>
      
         <li>
            <a href="careers.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-black <?php echo(basename($_SERVER['PHP_SELF'])=="careers.php"?"active2":"")?>">
               <span class="flex-1 ml-3 whitespace-nowrap">careers</span>
            </a>
         </li>
         <li>
            <a href="contact_us.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group hover:text-black <?php echo(basename($_SERVER['PHP_SELF'])=="contact_us.php"?"active2":"")?>">
               </svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Contact Us</span>
            </a>
         </li>
      </ul>
   </div>
   <div>
    <button class="bg-[rgb(56,45,94)] float-right p-2 rounded-3xl font-semibold text-white"><a href="tel:+919819189901"><span><i class="fa-solid fa-phone"></i></span> +919819189901</a></button>
   </div>
</div>



</script> 

<script>
   // When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 200) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-120px";
  }
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>