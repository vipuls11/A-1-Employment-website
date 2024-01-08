<link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css'>
<link rel="stylesheet" type="text/css" href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css'>
<!------------jquery------- -- -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<?php include('header.php') ?>
<div>
    <style>
          /* .........................................circular .................... */

  .circular {
    height: 140px;
    width: 140px;
    position: relative;
}

.circular .inner,
.circular .outer,
.circular .circle {
    position: absolute;
    z-index: 6;
    height: 100%;
    width: 100%;
    border-radius: 100%;
    box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.2);
}

.circular .inner {
    top: 35%;
    left: 35%;
    height: 120px;
    width: 120px;
    margin: -40px 0 0 -40px;
    background-color: #fff;
    border-radius: 100%;
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
}

.circular .circle {
    z-index: 1;
    box-shadow: none;
}

.circular .numb {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 10;
    font-size: 18px;
    font-weight: 500;
    color: #4158d0;
}

.circular .bar {
    position: absolute;
    height: 100%;
    width: 100%;
    background: #fff;
    -webkit-border-radius: 100%;
    clip: rect(0px, 140px, 140px, 50px);
}

.circle .bar .progress {
    position: absolute;
    height: 100%;
    width: 100%;
    -webkit-border-radius: 100%;
    clip: rect(0px, 50px, 140px, 0px);
}

.circle .bar .progress,
.dot span {
    background: red;
}

.circle .left .progress {
    z-index: 1;
    animation: left 4s linear both;
}

@keyframes left {
    100% {
        transform: rotate(180deg);
    }
}

.circle .right {
    z-index: 3;
    transform: rotate(180deg);
}

.circle .right .progress {
    animation: right 4s linear both;
    animation-delay: 4s;
}


@keyframes right {
    100% {
        transform: rotate(140deg);
    }
}


    /* .........................slidesssssssssssssssssssss....................... */
    .wrapper1 {
        width: 100%;
        padding-top: 20px;
        text-align: center;
    }
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

    .slick-prev,
    .slick-next {       
        border-radius: 15px;
        border-color: transparent;   
    }
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

<div class="pt-[0px]">
    <div class="relative bg-[url('images/img-blog-33.jpeg')] h-[500px] bg-cover bg-center  ">
    <div class="">
        <?php include('nav_header.php') ?>
    </div>
      <div class="absolute top-0 text-black right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-80 transition duration-300 ease-in-out bg-white">
      </div>
      <div class="w-2/3 absolute bottom-10 px-10">
        <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">HOME</h3>
                            <h2 class=" text-3xl font-extrabold mb-5">Clients</h2>
                            <p class="text-lg mb-5">Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
             </div> 
    </div>
    </div>

    <div class="relative bg-[url('images/bgn-footer.png')] bg-cover bg-center bg-repeat my-20">
      <div class=" z-30  px-10  lg:mt-5 ">
     <div class="w-1/3">
     <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">WHERE DID WE PROVE OUR WORTH</h3>
        <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Businesses helped </span> <br> By Avantage</h2>
        <p class="text-lg mb-5">Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation.</p>
     </div>
        <div class="grid lg:grid-cols-3 gap-10">
          <div>
            <div class="flex gap-5">
              <img src="A-1_img/icon/1.png" alt="" class="w-28 h-28">
              <div>
                <h4 class="text-2xl font-semibold mb-3">People Cohesion</h4>
                <p class="text-justify">More and less froze grumbled ran hawk mindfully tearfully pending crud.</p>
              </div>
            </div>
          </div>
          <div>
            <div class="flex gap-5">
              <img src="A-1_img/icon/1.png" alt="" class="w-28 h-28">
              <div>
                <h4 class="text-2xl font-semibold mb-3">People Cohesion</h4>
                <p class="text-justify">More and less froze grumbled ran hawk mindfully tearfully pending crud.</p>
              </div>
            </div>
          </div>
          <div class="flex gap-5">
            <img src="A-1_img/icon/5.png" alt="" class="w-28 h-28">
            <div>
              <h3 class="text-2xl font-semibold mb-3">Team Leadership</h3>
              <p class="text-justify">A less until infallible indistinct decided inventoried gosh hey some contemplated.</p>
            </div>
          </div>
          <div class="flex gap-5">
            <img src="A-1_img/icon/4.png" alt="" class="w-28 h-28">
            <div>
              <h3 class="text-2xl font-semibold mb-3">Team Build Up</h3>
              <p class="text-justify" style="font-family:Barlow,Arial,Helvetica,sans-serif;">Irritably punctiliously ahead far away groundhog darn contrary and fish underneath.</p>
            </div>
          </div>
          <div class="flex gap-5">
            <img src="A-1_img/icon/3.png" alt="" class="w-28 h-28">
            <div>
              <h3 class="text-2xl font-semibold mb-3">Strategy</h3>
              <p class="text-justify">Jeez alas after squarely excellent incessant on less vulgarly checked pertly.</p>
            </div>
          </div>
          <div class="flex gap-5">
            <img src="A-1_img/icon/2.png" alt="" class="w-28 h-28">
            <div>
              <h3 class="text-2xl font-semibold mb-3">Communication</h3>
              <p class="text-justify">Flustered precarious jeez unexpectedly overrode glowered away goodness.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  <div class="my-24 px-8">
    <div class="grid lg:grid-cols-4 gap-10">
      <div>
      <div class="container">
      <div class="circular">
        <div class="inner">
        </div>
        <div class="outer">
        </div>
        <div class="numb">
        <img src="A-1_img/icon/2.png" alt="">
      </div>
        <div class="circle">
            <!-- <div class="dot">
                <span></span>
            </div> -->
            <div class="bar left">
                <div class="progress">
                </div>
            </div>
            <div class="bar right">
                <div class="progress">
                </div>
            </div>
        </div>
      </div>
        <div>
          <h3 class="font-bold text-2xl my-3">The right people</h3>
          <p class="text-sm">Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme</p>
          </div>
      </div>
      </div>
      <div>
      <div class="container">
      <div class="circular">
        <div class="inner">
        </div>
        <div class="outer">
        </div>
        <div class="numb">
        <img src="A-1_img/icon/2.png" alt="">
      </div>
        <div class="circle">
            <!-- <div class="dot">
                <span></span>
            </div> -->
            <div class="bar left">
                <div class="progress">
                </div>
            </div>
            <div class="bar right">
                <div class="progress">
                </div>
            </div>
        </div>
      </div>
        <div>
          <h3 class="font-bold text-2xl my-3">A correct fit</h3>
          <p class="text-sm">Precisely disseminate superior deliverables whereas web-enabled application architectures.</p>
          </div>
      </div>
      </div>
      <div>
      <div class="container">
      <div class="circular">
        <div class="inner">
        </div>
        <div class="outer">
        </div>
        <div class="numb">
        <img src="A-1_img/icon/2.png" alt="">
      </div>
        <div class="circle">
            <!-- <div class="dot">
                <span></span>
            </div> -->
            <div class="bar left">
                <div class="progress">
                </div>
            </div>
            <div class="bar right">
                <div class="progress">
                </div>
            </div>
        </div>
      </div>
        <div>
          <h3 class="font-bold text-2xl my-3">People Staying</h3>
          <p class="text-sm">Continually reintermediate integrated processes through technically sound intellectual capital.</p>
          </div>
      </div>
      </div>
      <div>
      <div class="container">
      <div class="circular">
        <div class="inner">
        </div>
        <div class="outer">
        </div>
        <div class="numb">
        <img src="A-1_img/icon/2.png" alt="">
      </div>
        <div class="circle">
            <!-- <div class="dot">
                <span></span>
            </div> -->
            <div class="bar left">
                <div class="progress">
                </div>
            </div>
            <div class="bar right">
                <div class="progress">
                </div>
            </div>
        </div>
      </div>
        <div>
          <h3 class="font-bold text-2xl my-3">Further progress</h3>
          <p class="text-sm">Dramatically disseminate standardized metrics after resource leveling processes change.</p>
          </div>
      </div>
      </div>
    </div>
  </div>

  <!-- ....................................Trusted by Biggest....................................... -->
<div class="my-32 px-8">
    <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">GREAT REVIEWS BY OUR CLIENTS</h3>
    <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Trusted by Biggest</span> <br> Business Names</h2>
    <p class="text-lg text-justify mb-10 w-1/2">Our clients have always trusted our expertise and advices. Here’s what they have to say about us.</p>


    <div class="wrapper1">
        <div class="carousel_review">
            <div>
                <div class="card grid">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28 ">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
            <div>
                <div class="card grid">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
            <div>
                <div class="card grid">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
            <div>
                <div class="card grid">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
            <div>
                <div class="card grid">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
            <div>
                <div class="card grid ">
                    <div class="card-header justify-self-center">
                        <img src="A-1_img/client-01.jpg" alt="" class="rounded-full w-28 h-28">
                    </div>
                    <div class="card-body">
                    <div class="card-content">
                            <!-- <div class="card-title">This is the First slider</div> -->
                            <div class="card-text">
                                <h2 class=" text-xl font-bold mt-3 mb-5 text-red-600">Best people for me!</h2>
                                <p>Objectively integrate enterprice wide strategic them areas with functionlized infrastructure. Interactively producetize premium technologies</p>

                                <div class="flex items-center justify-center space-x-1 my-3">
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
</div>

<!-- ....................................Trusted by Biggest....................................... -->

 <!-- ...............improve your Business.................. -->
 <div class="">
    <div class="bg-[url('images/bgn-quote.jpeg')] h-[500px] bg-cover bg-center  bg-no-repeat my-24 ">
      <div class="grid w-full h-full">
        <div class="place-self-center text-center">
          <h3 class="uppercase text-md my-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">GET SOLUTIONS FAST!</h3>
          <h2 class="text-4xl font-bold mb-10"><span class="text-red-600">Need First-Class</span> HR Consultants?</h2>

          <button class="text-left text-sm bg-red-600 text-white px-8 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">GET A QUOTE NOW</a></button>
        </div>
      </div>
    </div>
  </div>
  <!-- ...............improve your Business.................. -->

   <!-- ....partner slider........... -->
   <div class="mt-24 px-8">
   <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">MORE THAN JUST BUSINESS</h3>
    <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Great Clients</span> <br> Over the years</h2>
    <p class="text-lg  mb-10 lg:w-2/4">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric outside the box thinking.</p>
    </div>
   <section class="mb-10">
            <div id="containers">
                <div id="slider-container">
                  <span onclick="slideRight()" class="btn"></span>
                    <div id="slider">
                      <div class="slide"><img src="A-1_img/logo-addison.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-applauz.png"alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-bello.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-bold-news.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-celeste.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-estato.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-hotel-berg.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-hotel-california.png" alt=""></div>
                      <div class="slide"><img src="A-1_img/logo-urbanist.png" alt=""></div>
                  </div>
                  <span onclick="slideLeft()" class="btn"></span>
                </div>
              </div>
        </section>

        
  <!-- ....partner slider........... -->


<?php include('footer.php') ?>
</div>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>

 <!-- ................carousel_review.................... -->
<script>
    $(document).ready(function() {
        $('.carousel_review').slick({
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            centerMode: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    centerMode: true,

                }

            }, {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    dots: true,
                    infinite: true,

                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: true,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
            }]
        });
    });
</script>
<!-- ................carousel_review.................... -->

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
        currentMargin = - currentPosition * (100 / slidesPerPage);
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
