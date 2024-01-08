<style>
    .menu a{ 
            position: relative;
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

<div id="" class="lg:block hidden absolute w-full z-30 px-8">
<nav class="relative flex text-gray-300 justify-between items-center py-1 ">
        <div>
          <a href="index.php"><img src="A-1_img/logo/A-1_LOGO-transparent-png-removebg-preview.png" alt="" class="w-48"></a>
        </div>
        <div class="flex items-center">
          <div id="">
            <ul class="nav flex text-lg  font-base text-black">
              <li class="menu relative "><a href="index.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "index.php" ? "active2" : "") ?>">Home</a></li>

              <li class="menu relative "><a href="our_Vission.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "our_Vission.php" ? "active2" : "") ?>">Our Vission</a></li>
              <li class="menu relative  "><a href="services.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "services" ? "active2" : "") ?>">Services</a>
              </li>
              <!-- <li class="menu relative   "><a href="clients.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "clients.php" ? "active2" : "") ?>">Clients</i></a> </li> -->
              <li class="menu relative  "><a href="careers.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "careers.php" ? "active2" : "") ?>">Careers</a></li>
              <li class="menu relative "><a href="contact_us.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "contact_us.php" ? "active2" : "") ?>">Contact Us</a></li>
            </ul>
          </div>
          <div>
            <button id="contact" class="bg-[rgb(56,45,94)] p-2 text-lg rounded-3xl font-semibold text-white"><a href=""><span><i class="fa-solid fa-phone"></i></span> +919819189901</a></button>
          </div>
        </div>
      </nav>
      </div>
         <!-- .................mobile responsive.................... -->
    <div id="" class="lg:hidden block absolute w-full z-30 px-8">
      <nav class="relative flex text-gray-300 justify-between items-center py-1 ">
        <div>
          <a href="index.php"><img src="A-1_img/logo/A-1_LOGO-transparent-png-removebg-preview.png" alt="" class="w-60"></a>
        </div>
        <div class="flex items-center">
          <div class="ham-icon">
            <button class="p-1.5 text-red-600 font-bold" type="button" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"><i class="fa fa-bars"></i></button>
          </div>
        </div>
    </nav>
    </div>