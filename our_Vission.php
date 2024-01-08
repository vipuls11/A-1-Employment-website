<link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
<link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
<!------------jquery------- -- -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<?php session_start(); ?>
<?php
   include('header.php') ?>

<style>
    /* ................image rotate................. */


    .flip-box-back {
        transform: rotateY(180deg);
    }

    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 300px;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); */
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }

    /* ................image rotate....................... */

    /* ..................partner slider.................... */
    #slider-container {
        height: 200px;
        width: 100%;
        max-width: 1400px;
        /* background: #54d5e4; */
        /* box-shadow: 5px 5px 8px gray inset; */
        position: relative;
        overflow: hidden;
        padding: 20px;
    }

    #slider-container .btn {
        position: absolute;
        top: calc(60% - 30px);
        height: 20px;
        width: 20px;
        border-left: 4px solid rgb(242, 209, 23);
        border-top: 4px solid rgb(242, 209, 23);
    }

    #slider-container .btn:hover {
        transform: scale(1.2);
    }

    #slider-container .btn.inactive {
        border-color: rgb(185, 173, 7)
    }

    #slider-container .btn:first-of-type {
        transform: rotate(-45deg);
        left: 35px
    }

    #slider-container .btn:last-of-type {
        transform: rotate(135deg);
        right: 10px;
    }

    #slider-container #slider {
        display: flex;
        width: 1000%;
        height: 100%;
        transition: all .5s;
    }

    #slider-container #slider .slide {
        height: 90%;
        margin: auto 10px;
        /* background-color: #a847a4;
            box-shadow: 2px 2px 4px 2px white, -2px -2px 4px 2px white; */
        display: grid;
        place-items: center;
    }

    /* #slider-container #slider .slide span {
            color: white;
            font-size: 150px;
          } */

    @media only screen and (min-width: 1100px) {

        #slider-container #slider .slide {
            width: calc(2.5% - 20px);
        }

    }

    @media only screen and (max-width: 1100px) {

        #slider-container #slider .slide {
            width: calc(3.3333333% - 20px);
        }

    }

    @media only screen and (max-width: 900px) {

        #slider-container #slider .slide {
            width: calc(5% - 20px);
        }

    }

    @media only screen and (max-width: 550px) {

        #slider-container #slider .slide {
            width: calc(10% - 20px);
        }

    }

    /* ..................partner slider.................... */

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

    .carousel {
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
   
    <div class="relative">
        <?php include('nav_header.php') ?>
    </div>
    <div id="" class=" -z-20">
        <div>
            <img src="images/Untitled design (38).png" alt="" class="lg:block hidden">
            <div class=" grid lg:grid-cols-3 gap-5 lg:absolute lg:top-[150px]  lg:pt-0 pt-[150px] z-30  px-10">
                <div class="mr-10">
                    <div class="  mt-5">
                        <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">AVANTAGE MISSION & VISION</h3> -->
                        <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Our Vision:</span> <br></h2>
                    </div>
                    <div class="pt-5">
                        <!-- <h4 class="font-thin">Client Satisfaction</h4> -->
                        <div class="w-full h-0.5  bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-0.5 bg-black rounded " style="width: 98%"></div>
                        </div>
                    </div>

                    <div class="pt-5">
                        <h4 class="font-thin">Client Satisfaction</h4>
                        <div class="w-full h-0.5  bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-0.5 bg-black rounded " style="width: 95%"></div>
                        </div>
                    </div>

                    <div class="pt-10">
                        <!-- <h4 class="font-thin">Projects Success</h4> -->
                        <div class="w-full h-0.5  bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-0.5 bg-black rounded " style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="my-5">
                        <p class="text-justify leading-7">We are committed to make constant efforts to provide a-1 employment and resource through our efficient search and by continual improvement to achieve total customer satisfaction. We give personal attention to our clients' needs. We control costs through effective program management, where safety and quality are never compromised.</p> <br>
                        <p class="text-justify leading-7">A-1 employment and resource our recruitment mandate process begins with personal meeting with client, understanding client business and its needs. The process involves post recruitment follow-ups with both clients and candidates for feedback after each round of interview.</p> <br>
                        <!-- <p>Quickly communicate enabled technology and turnkey leadership skills. Uniquely enable accurate supply chains rather than frictionless technology. Globally network focused materials vis-a-vis cost effective manufactured products.</p> -->
                    </div>
                </div>
                <div class="">
                    <div>
                        <p class="text-justify leading-7">
                       <span class="font-semibold text-black">Head hunting :</span> once the job details are identified, our search team will first identify suitable candidates from our exhaustive database and if required will advertise for the position.
                        </p> <br>
                        <p class="text-justify leading-7">
                       <span class="font-semibold text-black">Screening interview :</span> appropriate candidates are called for first screening interview at a-1 employment office wherein besides suitability of candidate for the position, academic credentials, and formal reference checks (if necessary) are verified. The short-listed candidates are adequately briefed about organization and the respective job position before they are recommended for an interview.
                        </p> <br>
                        <p class="text-justify leading-7">
                       <span class="font-semibold text-black">Follow-ups :</span> coordination with both client and candidates is managed until selection process of candidate for particular post is completed.
                        </p>
                    </div>
                </div>
                <div class="">
                <p class="text-justify leading-7">
                       <span class="font-semibold text-black">Final selection :</span>  once the selection process for the particular position is completed by client, we then ensure the smooth induction of candidate into organization.
                        </p>

                    <div class="mt-10">
                        <img src="images/WhatsApp Image 2023-08-26 at 1.13.49 PM.jpeg" alt="" class="rounded-full h-96 w-96">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- ...........Avantage Professionals............... -->
  <div class="relative my-40">
    <div class="absolute top-0 -z-20 "><img src="images/bgn-footer.png" alt="" style="width: 100%;" loading="lazy"></div>
    <div class="px-8 my-10">
      <h3 class="uppercase text-md mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">WE ARE THERE FOR YOU</h3>
      <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">A-1 </span> <br> Professionals</h2>
      <div class="grid lg:grid-cols-4 gap-10">

      <div class="">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="A-1_img/amit-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                    <div class="flip-card-back">
                        <img src="A-1_img/amit-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                </div>
            </div>
            <div>
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Managing Director</h3>
            <h2 class=" text-3xl font-bold mb-5 capitalize"><span class="text-red-600">Amit Prajapati</span></h2>
            <!-- <p class="mb-5 test-sm">Ignobly belched incoherently poetic enticing cowered where grateful hatchet resold ferret.</p>

            <button class="font-semibold text-xs uppercase" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="">Find Out More <span>></span></a></button> -->
            </div>
        </div>

        <div class="">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="A-1_img/amit-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                    <div class="flip-card-back">
                        <img src="A-1_img/amit-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                </div>
            </div>
            <div>
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Managing Director</h3>
            <h2 class=" text-3xl font-bold mb-5 capitalize"><span class="text-red-600">Uma Prajapati</span></h2>
            <!-- <p class="mb-5 test-sm">Ignobly belched incoherently poetic enticing cowered where grateful hatchet resold ferret.</p>

            <button class="font-semibold text-xs uppercase" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="">Find Out More <span>></span></a></button> -->
            </div>
        </div>

        <div class="">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="A-1_img/uma-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                    <div class="flip-card-back">
                        <img src="A-1_img/uma-removebg-preview.png" alt="Avatar"
                            style="width:100%; height:300px;" loading="lazy">
                    </div>
                </div>
            </div>
            <div>
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">HR Manager</h3>
            <h2 class=" text-3xl font-bold mb-5 capitalize"><span class="text-red-600">Cynthia Pereira</span></h2>
            <!-- <p class="mb-5 test-sm">Ignobly belched incoherently poetic enticing cowered where grateful hatchet resold ferret.</p>

            <button class="font-semibold text-xs uppercase" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="">Find Out More <span>></span></a></button> -->
            </div>
        </div>

        <div class="">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="A-1_img/uma-removebg-preview.png" alt="Avatar"
                            style="width:100%; height: 300px;" loading="lazy">
                    </div>
                    <div class="flip-card-back">
                        <img src="A-1_img/uma-removebg-preview.png" alt="Avatar"
                            style="width:100%; height: 300px;" loading="lazy">
                    </div>
                </div>
            </div>
            <div>
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Payroll Executive</h3>
            <h2 class=" text-3xl font-bold mb-5 capitalize"><span class="text-red-600">Kinjal Mehta</span></h2>
            <!-- <p class="mb-5 test-sm">Ignobly belched incoherently poetic enticing cowered where grateful hatchet resold ferret.</p> -->

            <!-- <button class="font-semibold text-xs uppercase" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="">Find Out More <span>></span></a></button> -->
            </div>
        </div>
      </div>
    </div>
  </div>


<!-- ....partner slider........... -->
<section class="mb-24">
            <div id="containers">
                <div id="slider-container">
                  <span onclick="slideRight()" class="btn"></span>
                    <div id="slider">
                      <div class="slide"><img src="A-1_img/oriflamme.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/otc.jpeg"alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/paari.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/pooja.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/razvi_kiran.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/seth.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/temple.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/texhlean.jpeg" alt="" loading="lazy"></div>
                      <div class="slide"><img src="A-1_img/V-tech.jpeg" alt="" loading="lazy"></div>
                  </div>
                  <span onclick="slideLeft()" class="btn"></span>
                </div>
              </div>
        </section>
  <!-- ....partner slider........... -->


<!-- ...............improve your Business.................. -->
<div class="bg-[url('images/bgn-team.jpeg')] bg-cover bg-center bg-no-repeat my-10">
    <div class="grid lg:grid-cols-2 gap-10 px-8">
        <div class="">
            <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">FIND THE CAREER OF YOUR DREAMS</h3>
            <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">We're more than just a workplace</span> <br> We're a Family</h2>
            <p class="text-lg text-justify mb-10">We know that finding a meaningful and rewarding job can be a long journey. Our goal is to make that process as easy as possible for you, and to create a work enviroment that's satifying-one where you'll look forward to coming to everyday. Start your journey with us by browsing available jobs..</p>
<!-- 
            <div class="wrapper1">
                <div class="carousel">
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="" class="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                                <img src="images/1.PNG" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-content">

                                    <div class="card-text">
                                        <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
        <div class="lg:mt-0 mt-10"><img src="images/Untitled design (8).jpg" alt="" loading="lazy"></div>
    </div>
</div>
<!-- ...............improve your Business.................. -->

<!-- ....................................Trusted by Biggest....................................... -->
<!-- <div class="my-32 px-8">
    <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">BUSINESS ARE FINDING GREAT EMPLOYEES</h3>
    <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">What do we</span> <br> Business Names</h2>
    <p class="text-lg text-justify mb-10 w-1/2">Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.</p>


    <div class="wrapper1">
        <div class="carousel_review">
            <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                        <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>-->
            <!-- <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div>
                <div class="card">
                    <div class="card-header">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content"> -->
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <!-- <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center space-x-1 my-3">
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>

                                <span>Justin Emerson</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- ....................................Trusted by Biggest....................................... -->


<?php include('footer.php') ?>
<script>
    var container = document.getElementById('containers')
    var slider = document.getElementById('slider');
    var slides = document.getElementsByClassName('slide').length;
    var buttons = document.getElementsByClassName('btn');


    var currentPosition = 0;
    var currentMargin = 0;
    var slidesPerPage = 0;
    var slidesCount = slides - slidesPerPage;
    var containerWidth = container.offsetWidth;
    var prevKeyActive = false;
    var nextKeyActive = true;

    window.addEventListener("resize", checkWidth);

    function checkWidth() {
        containerWidth = container.offsetWidth;
        setParams(containerWidth);
    }

    function setParams(w) {
        if (w < 551) {
            slidesPerPage = 1;
        } else {
            if (w < 901) {
                slidesPerPage = 2;
            } else {
                if (w < 1101) {
                    slidesPerPage = 3;
                } else {
                    slidesPerPage = 4;
                }
            }
        }
        slidesCount = slides - slidesPerPage;
        if (currentPosition > slidesCount) {
            currentPosition -= slidesPerPage;
        };
        currentMargin = -currentPosition * (100 / slidesPerPage);
        slider.style.marginLeft = currentMargin + '%';
        if (currentPosition > 0) {
            buttons[0].classList.remove('inactive');
        }
        if (currentPosition < slidesCount) {
            buttons[1].classList.remove('inactive');
        }
        if (currentPosition >= slidesCount) {
            buttons[1].classList.add('inactive');
        }
    }

    setParams();

    function slideRight() {
        if (currentPosition != 0) {
            slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
            currentMargin += (100 / slidesPerPage);
            currentPosition--;
        };
        if (currentPosition === 0) {
            buttons[0].classList.add('inactive');
        }
        if (currentPosition < slidesCount) {
            buttons[1].classList.remove('inactive');
        }
    };

    function slideLeft() {
        if (currentPosition != slidesCount) {
            slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
            currentMargin -= (100 / slidesPerPage);
            currentPosition++;
        };
        if (currentPosition == slidesCount) {
            buttons[1].classList.add('inactive');
        }
        if (currentPosition > 0) {
            buttons[0].classList.remove('inactive');
        }
    };
    setTimeout(setParams, 2000); // Change image every 2 seconds
</script>







