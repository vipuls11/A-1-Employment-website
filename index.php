<?php include('header.php') 

?>
<div>
 
  <style>
    * {
      box-sizing: border-box
    }

    /* body {font-family: Verdana, sans-serif; margin:0} */
    .mySlides {
      display: none
    }

    img {
      vertical-align: middle;
    }

    /* Slideshow container */
    .slideshow-container {
      /* max-width: 1000px; */
      position: relative;
      /* margin: auto; */
    }

    /* Next & previous buttons */
    .prev,
    .next {
      cursor: pointer;
      position: absolute;
      top: 90%;
      /* width: auto; */
      padding: 10px 15px;
      /* margin-top: -22px; */
      color: white;
      font-weight: bold;
      font-size: 20px;
      transition: 0.6s ease;
      border-radius: 50%;
      user-select: none;
      background-color: rgb(56, 45, 94);
    }

    .prev {
      right: 150px;
    }

    /* Position the "next button" to the right */
    .next {
      right: 90px;
      /* border-radius: 3px 0 0 3px; */
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover,
    .next:hover {
      background-color: rgb(56, 45, 94);
    }

    Caption text */
    /* .text {
  color: #f2f2f2;
  font-size: 15px;
  position: absolute;
  top: 250px;
  width: 100%; 
  background-color: red;

} */

    /* Number text (1/3 etc) */
    /* .numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
} */

    /* The dots/bullets/indicators */
    .footerdot{
      cursor: pointer;
      height: 30px;
      width: 30px;
      margin: 0 2px;
      background-color: red;
      border-radius: 50%;
      display: flex;
      transition: background-color 0.6s ease;
      z-index: 200;
    }

    .active,
    .footerdot:hover {
      background-color: #717171;

    }


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

    /* Fading animation */
    .fade {
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }
      
    }


    /* ................tab portfolio................ */
    /* Style the tab */
    .tab {
      overflow: hidden;
      /* border: 1px solid #ccc; */
      /* background-color: #f1f1f1; */
    }

    /* Style the buttons inside the tab */
    .tab button {
      /* background-color: inherit; */
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
      font-weight: 600;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
      color: red;
       /* content:"";
            position: absolute;
             background-color: rgb(207, 5, 5);
            height: 2px;
            width: 3px;
            left: -20px;
            bottom: 0px;
            transition: 0.3s; */
    }

    /* .menu a:after{
            content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 0;
            transition: 0.3s;
        } */

        .tab button:hover:before{
            width: 10px;
        }

    .tab button:before {
      color: red;
      content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 25px;
            transition: 0.3s;
    }
    .tab button.active3{
      color: red;
    }
    /* Create an active/current tablink class */
    .tab button.active3:before {
      color: red;
      content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 10px;
            left: 0;
            bottom: 25px;
            transition: 0.3s;
    }

    /* Style the tab content */
    /* .tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
} */


/* ....................Tab Button................ */
.image_card:before {
  content: '';
  display: block;
  position: absolute;
  height: 0%;
  width: 100%;
  bottom: 0;
  transition: height 1.5s ease-out;
  background: linear-gradient(to bottom, transparent 50%, white 100%);
}

.image_card:hover:before {
  height: 100%;
}

/* .card {
            position: relative;
        } */

        .image_card1 {
            position: absolute;
            /* background: linear-gradient(to top, #00263a 0%, #ccffff 100%); */
            /* background: linear-gradient(rgba(0, 0, 0, 0.6), #00263a); */
            bottom: 0;
            left: 0;
            overflow: hidden;
            height: 0%;
            width: 100%;
            /* display: flex;
            justify-content: center;
            align-items: center; */
            transition: 1.5s;
        }

        .card:hover .image_card1 {
            height: 35%;
        }
/* ....................Tab Button................ */

/* .........................blog............... */

.Blog_card:before {
  content: '';
  display: block;
  position: absolute;
  height: 100%;
  width: 100%;
  bottom: 0;
  transition: height 0.5s ease-out;
  background: linear-gradient(to bottom, transparent 0%, white 100%);
}

/* .Blog_card:before {
 
} */

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
  </style>

  <div class="relative slideshow-container  ">   
    <?php include('nav_header.php') ?>
    </div>
    <div class="mySlides fade ">
      <!-- <div class="numbertext">1 / 3</div> -->
      <img src="images/img-slider-01.jpeg" style="width:100%" class="h-screen" loading="lazy">
      <div class="text absolute left-[50%] lg:top-[42%] top-[25%]">
        <h5 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">RECRUITMENT AGENCY</h5>
        <h3 class="lg:text-5xl text-3xl font-extrabold mb-10"><span class="text-red-600">The Right People</span> <br> For Your Team</h3>
        <div>
          <button class="text-left text-sm bg-red-600 text-white px-8 px-4 mr-3 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
          <button class="text-left lg:mt-0 mt-3 text-sm bg-red-600 text-white px-8 py-4 px-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
        </div>
      </div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">2 / 3</div> -->
      <img src="images/img-slider-02.jpeg" style="width:100%" class="h-screen" loading="lazy">
      <div class="text absolute left-[5%] top-[45%] ">
        <h5 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">TODAY"S TALENT, TOMORROW'S SUCCESS</h5>
        <h3 class="lg:text-5xl text-3xl font-extrabold mb-10"><span class="text-red-600">The Future</span> <br> Is Bright</h3>
        <div>
          <button class="text-left text-sm bg-red-600 text-white px-8 mr-3 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
          <button class="text-left text-sm bg-red-600 text-white px-8 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
        </div>
      </div>
    </div>

    <div class="mySlides fade">
      <!-- <div class="numbertext">3 / 3</div> -->
      <img src="images/img-slider-03.jpeg" style="width:100%" class="h-screen" loading="lazy">
      <div class="text absolute left-[45%] top-[42%] ">
        <h5 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">SUCCESS THROUGH PEOPLE</h5>
        <h3 class="lg:text-5xl text-3xl font-extrabold mb-10"><span class="text-red-600">Value your people</span> <br> Think Avantage</h3>
        <div>
          <button class="text-left text-sm bg-red-600 text-white px-8 mr-3 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
          <button class="text-left lg:mt-0 mt-3 text-sm bg-red-600 text-white px-8 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button>
        </div>
      </div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

  </div>
  <br>

  <div class="flex" style="text-align:center;">
    <span class="footerdot" onclick="currentSlide(1)"></span>
    <span class="footerdot" onclick="currentSlide(2)"></span>
    <span class="footerdot" onclick="currentSlide(3)"></span>
  </div>

  <!-- .............Avantage Section........... -->
  <div class="my-32 px-8">
    <div class="grid lg:grid-cols-3 gap-10">
      <div>
        <p class="text-3xl  p-4 text-[rgb(200,69,74)] ">A-1 Employment can help you with picking out the best people for your company.</p>
      </div>
      <div>
        <div class="flex gap-5">
          <img src="A-1_img/icon/1.png" alt="" class="w-28 h-28">
          <div>
            <h4 class="text-xl font-semibold mb-3 uppercase">Corporate Recruitment</h4>
            <p class="text-justify">Recruitment mandate process begins with personal meeting with the clients, understanding clients business and their needs.</p>
          </div>
        </div>
      </div>
      <div class="flex gap-5">
        <img src="A-1_img/icon/5.png" alt="" class="w-28 h-28">
        <div>
          <h3 class="text-xl font-semibold mb-3 uppercase">Permanent Staffing</h3>
          <p class="text-justify">Invest in people that are perfect for your business. We source the best talent from the industry for you. Give us your hiring.....</p>
        </div>
      </div>
      <div class="flex gap-5">
      <img src="A-1_img/icon/3.png" alt="" class="w-28 h-28">
       
        <div>
          <h3 class="text-xl font-semibold mb-3 uppercase">STATUTORY COMPLIANCE</h3>
          <p class="text-justify" style="font-family:Barlow,Arial,Helvetica,sans-serif;">Statutory compliance in terms of HR is a legal framework within which....</p>
        </div>
      </div>
      <div class="flex gap-5">
      <img src="A-1_img/icon/4.png" alt="" class="w-28 h-28">
        <div>
          <h3 class="text-xl font-semibold mb-3 uppercase">Result Oriented</h3>
          <p class="text-justify">We deliver our best services in a effective way which may reduce the time and leads to the best possible outcome...</p>
        </div>
      </div>
      <div class="flex gap-5">
        <img src="A-1_img/icon/2.png" alt="" class="w-28 h-28">
        <div>
          <h3 class="text-xl font-semibold mb-3 uppercase">Compititative Rates</h3>
          <p class="text-justify">A-1 Employment aim to provide high quality and in-depth services to our clients at right competitive market rates...</p>
        </div>
      </div>
    </div>
  </div>
  <!-- .............Avantage Section........... -->

  <!-- ...............improve your Business.................. -->
  <div class="bg-[url('images/bgn-team.jpeg')] bg-cover bg-center bg-no-repeat my-24">
    <div class="grid lg:grid-cols-2 ga-10 px-8">
      <div class="grid place-content-center">
        <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Find the career of your dreams</h3>
        <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">We're more than just a workplace</span> <br> We're a Family</h2>
        <p class="text-lg mb-10">We know that finding a meaningful and rewarding job can be a long journey. Our goal is to make that process as easy as possible for you, and to create a work enviroment that's satifying-one where you'll look forward to coming to everyday. Start your journey with us by browsing available jobs.</p>
        <div><button class="text-left bg-red-600 text-white px-8 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">VIEW OUR PORTFOLIO</a></button></div>
      </div>
      <div class="lg:mt-0 mt-10"><img src="images/Untitled design (8).jpg" alt="" loading="lazy"></div>
    </div>
  </div>
  <!-- ...............improve your Business.................. -->

  <!-- ...........Avantage Professionals............... -->
  <div class="relative ">
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
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Director <span class="text-xl">1</span></h3>
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
            <h3 class="uppercase text-md my-5" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Director <span class="text-xl">2</span></h3>
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
  <section class="mb-5">
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


 
  <div class="my-24 w-screen h-screen ">
  <div class="relative w-full h-full">
    <img src="images/bgn-newsletter-curve.png" alt="" class=" z-30 w-full h-full">
      <img src="images/bgn-newsletter.jpeg" alt="" class="absolute top-0 overflow-hidden w-full h-full -z-20" loading="lazy">
      <div class=" absolute top-0 text-black text-left px-8 lg:w-6/12">
              <!-- <h5 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">NEWS PROJECTS</h5> -->
                <h2 class=" text-3xl font-extrabold mb-3" ><span class="text-red-600">About Us</span><br></h2>
            <p class=" text-md text-black  text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">A1 Employment and resource India pvt ltd is a professionally managed Indian company incorporated in 07 September 2016 with a proven track record in providing recruitment services /commercial payroll outsourcing to the Indian corporate.</p> 
           

            <div class="">
              <input type="text" name="" value=""  placeholder="Enter Your Email Address" required class="w-96 mr-5 py-3" style="border-radius: 25px;"> 
              <button class="text-right text-sm bg-red-600 text-white px-8 lg:mt-0  mt-5 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">SUBSCRIBE NOW</a></button>
            </div>
              </div>
              <div class="absolute bottom-[100px]  px-10 ">
              <p class=" text-md text-black  text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">A-1 employment is one the fastest growing recruitment and outsourcing company. 60% of business is repeat business from existing clients. Over 40 trained and specialized consultants to customize your hr solutions. We are in the professional recruitment business since 07 September 2016, starting with an initial strength of 30 and rapidly growing to the present highly trained team of close to 500.
</p>
              </div> 
              
  </div>
  </div>
  <?php include('footer.php') ?>
</div>

