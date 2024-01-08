
<style> 
body
    {
    /* font-family: 'Poppins', sans-serif; */
    font-family: "Barlow",Arial,Helvetica,sans-serif;
    }

.location:hover .location_span{
  color:black;
}
</style>


  <div class="relative">
  <div class="absolute bottom-0 -z-30"><img src="images/bgn-footer.png" alt=""></div>
    <footer class="px-8 ">
      <div class="grid lg:grid-cols-4 gap-5 py-5">
        <div>
          <div>
          <a href="index"><img src="A-1_img/logo/A-1_LOGO-transparent-png-removebg-preview.png" alt="" class="w-60"></a>
            <p class="text-sm my-3">A-1 Employment AND Resource India Private Limited = Job Search, Staffing & Recruitment</p>
          </div>

          <p class="text-sm hover:text-[rgb(200,69,74)]  mt-2"><a href=""><span><i class="fa-solid fa-phone"></i></span> +919819189901</a></p>
          <p class="text-sm hover:text-[rgb(200,69,74)]  my-2"><a href=""><span><i class="fa-solid fa-envelope"></i></span> hr@a1employmentservices.com</a></p>
          <p class="text-sm hover:text-[rgb(200,69,74)]  mb-2"><a href="">Are you a Job seeker? <span class="font-extrabold" style="font-family: Raleway,Arial,Helvetica,sans-serif;">FIND JOBS</span></a></p>
        </div>
        <div class="col-span-2 flex">
        <div class="footer-menu "> 
        <h5 class="uppercase text-xs">OUR LOCATIONS</h5>
          <h3 class="text-xl font-extrabold text-[rgb(200,69,74)] my-3" style="font-family: Raleway,Arial,Helvetica,sans-serif;">Where to find us</h3>
                <div class="content ">
                   <img src="A-1_img/img-footer-map.png" alt="">
                </div>
            </div>
            <div class="flex items-center  text-xs">
                    <ul class="lg:mt-20 mt-5 leading-6">
                        <li class=" "><a href="" class="location"><span class="location_span mr-2 text-red-600 "><i class="fa-solid fa-location-dot"></i></span>India: 9819189901</a></li>
                        <!-- <li class="location"><a href=""><span class="location_span mr-2 text-red-600 "><i class="fa-solid fa-location-dot"></i></span>Ontario: 613 285 5534</a></li>
                        <li class="location"><a href=""><span class="location_span mr-2 text-red-600 "><i class="fa-solid fa-location-dot"></i></span>Tokyo: 0428 298 114</a></li> -->
                    </ul>
                </div>
        </div>
        <div>
        <div class="footer-menu"> 
        <h5 class="uppercase text-xs uppercase">GET IN TOUCH</h5>
                <h1 class="text-xl font-extrabold text-[rgb(200,69,74)] my-3" style="font-family: Raleway,Arial,Helvetica,sans-serif;">A-1 Employment: Social links</h1>

                <!-- <p class="text-sm">Taking seamless key performance indicators offline to maximise the long tail.</p>  -->
            </div>
            <div class=" mt-10">
                    <ul class="flex gap-3">
                        <li class=""><a href=""><span class="px-5 py-4 bg-[rgb(200,69,74)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-facebook-f"></i></span></a></li>
                        <li class=""><a href=""><span class="p-4   bg-[rgb(200,69,74)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-twitter"></i></span></a></li>
                        <li class=""><a href=""><span class="py-4 px-5 bg-[rgb(200,69,74)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-pinterest-p"></i></span></a></li>
                        <li class=""><a href=""><span class="py-4 px-5 bg-[rgb(200,69,74)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-linkedin-in"></i></span></a></li>

                    </ul>
                </div>
        </div>
        <div>
        </div>
      </div>
    </footer>
    <footer class="">
      <div class="lg:flex gap-40 items-center  py-8 mx-8  border-t-2 " style="font-family: Raleway,Arial,Helvetica,sans-serif;">
        <div class=""><p class="text-sm ">Copyright by <span class="font-bold">BoldThemes</span>. All rights reserved.</p></div>
        <div id="" class="">
            <ul class="nav flex text-xs text-black uppercase w-full">
           <li class=""><a href="index" class="mx-2 hover:text-gray-400 ">Home</a></li>
           <li class=""><a href="our_Vission" class="mx-2 hover:text-gray-400">Our Vission</a></li>
           <li class=""><a href="services"  class="mx-2 hover:text-gray-400">Services</a></li>
            <li class=""><a href="clients"  class="mx-2 hover:text-gray-400">Clients</a> </li>
            <li class=""><a href="careers"  class="mx-2 hover:text-gray-400">Careers</a></li>
            <li class=""><a href="contact_us"  class="mx-2 hover:text-gray-400">Contact Us</a></li>
            <li class="mx-2 cursor-pointer" id="scroll"><span class="mr-2">&#8743;</span>BACK TO TOP</li>
          </ul>
        </div>
      </div>
    </footer>
    </div>

 
    <script>
    $(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#scroll').fadeIn(); 
      } else { 
          $('#scroll').fadeOut(); 
      } 
  }); 
  $('#scroll').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 800); 
      return false; 
  }); 
});

  </script> 