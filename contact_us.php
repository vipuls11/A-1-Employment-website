
<!------------jquery------- -- -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<?php
    session_start();
    include('header.php') ?>
<style>
   /* .........................slidesssssssssssssssssssss....................... */
    /* .wrapper {
        width: 100%;
        padding-top: 20px;
        text-align: center;
    } */
    /* 
    h2 {
        font-family: sans-serif;
        color: #fff;
    } */

    .carousel_review {
        width: 100%;
        /* margin: 0px auto; */

    }

    .slick-slide {
        margin: 10px;
        height: auto;
    }

    /* 
    .slick-slide img {
        width: 100%;
    } */

    /* .slick-prev,
    .slick-next {
      
        border-radius: 15px;
        border-color: transparent;
    } */
    /* 
    .card {
        border: 2px solid #fff;
        box-shadow: 1px 1px 15px #ccc;
    } */

    /* .card-body {
        background: #fff;
        width: 100%;
        vertical-align: top;
    } */

    /* .card-content {
        text-align: left;
        color: #333;
        padding: 15px;
    } */

    /* .card-text {
        font-size: 14px;
        font-weight: 300;
    } */

    /* .........................slidesssssssssssssssssssss....................... */
</style>

<div>

   
    <div class="pt-[0px]">
        <div class="relative bg-[url('images/img-blog-33.jpeg')] h-[500px] bg-cover bg-center  ">
            <div class="">
                <?php include('nav_header.php') ?>
            </div>
            <div class="absolute top-0 text-black right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-80 transition duration-300 ease-in-out bg-white">
            </div>
            <div class="lg:w-2/3 absolute bottom-10 px-10">
                <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">HOME</h3> -->
                <h2 class=" text-3xl font-extrabold mb-5">Contact</h2>
                <!-- <p class="lg:text-lg mb-5">Credibly reintermediate backend ideas for cross-platform models. Continually reintermediate integrated processes through technically sound intellectual capital. Holistically foster superior methodologies without market-driven best practices.</p> -->
            </div>
        </div>
    </div>
<!-- .....................................................Get it Touch........................... -->
    <div class="px-8 py-20">
        <div class="grid lg:grid-cols-2 gap-10">
            <div>
                <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">HOME</h3> -->
                <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Get it</span> Touch</h2>
                <!-- <p class="text-lg mb-5">Credibly reintermediate backend ideas for cross-platform models. Continually reintermediate integrated processes through technically sound intellectual capital. Holistically foster superior methodologies without market-driven best practices.</p> -->
            </div>
            <div>
            <div class="grid lg:grid-cols-3 gap-10 text-center justify-items-center " >
                    <div class="card-text">
                        <div class="grid justify-items-center"><img src="images/1.PNG" alt=""></div>
                        <h3 class="text-lg font-extrabold mb-3">Office</h3>
                        <p class="px-4">Mumbai, Maharashtra </p>
                    </div>
                    <div class="card-text">
                    <div class="grid justify-items-center"><img src="images/1.PNG" alt=""></div>
                        <h3 class="text-lg font-extrabold mb-3">Email us</h3>
                        <p class="px-4 mb-1"><a href="">hr@a1employmentservices.com</a></p> 
                        <!-- <p><a href="">office@avantage.co.uk</a></p> -->
                    </div>
                    <div class="card-text">
                    <div class="grid justify-items-center"><img src="images/1.PNG" alt=""></div>
                        <h3 class="text-lg font-extrabold mb-3">Call us</h3>
                        <p class="px-4 mb-1"><a href="">+91 9819189901</a></p> 
                        <!-- <p><a href="">020 7996 223</a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- .....................................................Get it Touch........................... -->

<!-- .....................................................Maps........................... -->

    <div class="my-20 ">
    <div class="grid lg:grid-cols-2 gap-10 px-8">
    <div class="relative z-30">
    <img src="images/img-map-cover.png" alt="" class=" z-30">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.6756968470277!2d-0.12494062337921445!3d51.519165471816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b340cce7701%3A0x843ee27c49cac740!2sBloomsbury%20Square%2C%20London%2C%20UK!5e0!3m2!1sen!2sin!4v1691316521678!5m2!1sen!2sin"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="absolute top-0 overflow-hidden w-full h-full -z-20"></iframe>
  </div>
  <div class="">
  <?php
                    // if(isset($_SESSION['status']))
                    // {
                    //     ?>
                    <!-- //         <div>
                    //         <p id='msg' class='submitMsg py-4 text-center bg-green-300'><?php echo $_SESSION['status'];?></p>
                    //         </div> -->
                        <?php
                        
                    //     unset($_SESSION['status']);
                    // }
                // if ($insert == true) {
                //     echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
                // }
                // ?>
    <div class="lg:px-10 py-5">
      <p>Required fields are marked *</p>
    </div>
  <form action="connection" method="POST">
    <input type="hidden" name="redirect" value="contact_us">
                <div class="w-full lg:px-10 mb-5">
                  <label for="">Your Name<span>*</span></label>
                    <input type="text" name="name"  id="" placeholder="Your Name*" class="w-full py-2.5 px-6" style="border-radius: 50px;" required>
                </div>
                <div class="w-full lg:px-10 mb-5">
                <label for="">Your Email<span>*</span></label>
                    <input type="text" name="email" id="" placeholder="Your Email Address*" class="w-full py-2.5 px-6" style="border-radius: 50px;" required>
                </div>
                <div class="w-full lg:px-10 mb-5">
                <label for="">Subject</label>
                    <input type="text" name="subject" id="" placeholder="Enter your Subject*" class="w-full py-2.5 px-6" style="border-radius: 50px;">
                </div>
                <div class="w-full lg:px-10 mb-5">
                <label for="">Your Message<span>*</span></label>
                    <textarea  id="" cols="30" name="massage" rows="5" placeholder="Enter your Message" class="w-full p-4" style="border-radius: 30px;" required></textarea>
                </div>

                <div class="px-10">
                    <button type="submit" class="text-left text-sm bg-red-600 text-white px-8 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">submit message</button>
                </div>
            </form>
  </div>

    </div>
  </div>
  <!-- .....................................................Maps........................... -->

 
<div>
<?php include('footer.php') ?>
</div>

