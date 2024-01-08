<?php include('header.php') ?>
<style>
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

  */
  

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

        /* .tab button:hover:before{
            width: 10px;
        } */

    .tab button:before {
 
      content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 25px;
            transition: 0.3s;
    }
    /* .tab button.active3{
      color: red;
    } */
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
            height: 50%;
        }
/* ....................Tab Button................ */
</style>

<div>


    <!-- ...........Need First-Class HR Consultants?................. -->
    <div class="">
        <div class="relative">
            <?php include('nav_header.php') ?>
        </div>
        <!-- <div id="" class=" -z-20">
            <div>
                <img src="images/Untitled design (38).png" alt="" class="lg:block hidden">
                <div class="grid lg:grid-cols-2 gap-5 lg:absolute lg:top-20 lg:pt-0 pt-[150px] z-30  px-10">
                    <div>
                        <img src="images/img-people-03.png" alt="">
                    </div>
                    <div class="">
                        <div class="mt-5">
                            <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">HR CONSULTANT</h3>
                            <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">Kendrick</span> Hart</h2>
                            <p class="text-lg mb-5">We are in the professional recruitment business since 07 September 2016, starting with an initial strength of 30 and rapidly growing to the present highly trained team of close to 500.</p>
                        </div>

                        <div class="grid lg:grid-cols-2 gap-5 py-10 border-y-2 border-grey-800">
                            <div>
                                <p class="leading-7 px-4">A1 Employment and resource India pvt ltd is a professionally managed Indian company incorporated in 07 September 2016 with a proven track record in providing recruitment services /commercial payroll outsourcing to the Indian corporate..</p>
                            </div>
                            <div>
                                <p class="leading-7 px-4 ">
                                A-1 employment is one the fastest growing recruitment and outsourcing company. 60% of business is repeat business from existing clients. Over 40 trained and specialized consultants to customize your hr solutions.
                                </p>
                            </div>
                        </div>
                        <div class=" my-10">
                            <ul class="flex gap-3">
                                <li class=""><a href=""><span class="px-5 py-4 bg-[rgb(59,89,152)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-facebook-f"></i></span></a></li>
                                <li class=""><a href=""><span class="p-4   bg-[rgb(220,78,64)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-google-plus-g"></i></span></a></li>
                                <li class=""><a href=""><span class="py-4 px-5 bg-[rgb(189,8,27)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-pinterest-p"></i></span></a></li>
                                <li class=""><a href=""><span class="py-4 px-5 bg-[rgb(0,123,181)] rounded-full text-xl text-white hover:text-[rgb(200,69,74)] hover:bg-white hover:border-2 hover:border-[rgb(200,69,74)] hover:transition hover:ease-in-out   hover:duration-150"><i class="fa-brands fa-linkedin-in"></i></span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div> -->
        <!-- .........................................Contact Kendrick.......................... -->
        <div class="">
            <div class="grid lg:grid-cols-3 px-10 ">
                <div class=" grid col-span-2  content-end ">
                    <p class="pr-8 leading-7 border-b-2 border-grey-400 pb-10">
                        Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets. Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p>
                </div>
                <div class="">
                    <img src="images/img-blog-29-1280x1280.jpeg" alt="" class="rounded-full">
                </div>
            </div>
            <div class="grid lg:grid-cols-3 px-10 pt-10">
                <div class="col-span-2">
                <div class=" grid lg:grid-cols-2  gap-10">
                    <div class="px-4">
                        <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p> <br>
                        <p>Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities.</p> <br>
                        <p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p> <br>
                        <p>Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences.</p>
                    </div>
                    <div class="px-4">
                        <p>Globally incubate standards compliant channels before scalable benefits. Quickly disseminate superior deliverables whereas web-enabled applications. Quickly drive clicks-and-mortar catalysts for change before vertical architectures.</p> <br>
                        <p>Credibly reintermediate backend ideas for cross-platform models. Continually reintermediate integrated processes through technically sound intellectual capital. Holistically foster superior methodologies without market-driven best practices.</p> <br>
                        <p>Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change. Seamlessly underwhelm optimal testing procedures whereas bricks-and-clicks processes.</p>
                        <br>
                        <p>Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-business. Credibly pontificate highly efficient manufactured products and enabled data.</p>
                    </div>
                </div>
                </div>
                <div class="">
                    <div class="  mt-5">
                        <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">GET IN TOUCH</h3>
                        <h2 class=" text-2xl font-extrabold mb-5"><span class="text-red-600">Contact Kendrick</h2>
                        <p class="text-sm mb-5">Distinctively exploit optimal alignments for intuitive bandwidth. Quickly coordinate e-business applications through revolutionary catalysts for change.</p>
                    </div>
                    <div>
                        <div class="flex gap-5">
                            <img src="images/1.PNG" alt="" class="w-24">
                            <div>
                                <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                <p>Bloomsbury Square, <br>
                                    London WC1B 4EA</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <img src="images/1.PNG" alt="" class="w-24">
                            <div>
                                <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                <p>Bloomsbury Square, <br>
                                    London WC1B 4EA</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <img src="images/1.PNG" alt="" class="w-24">
                            <div>
                                <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                <p>Bloomsbury Square, <br>
                                    London WC1B 4EA</p>
                            </div>
                        </div>

                        <div class="flex gap-5">
                            <img src="images/1.PNG" alt="" class="w-24">
                            <div>
                                <h3 class="text-lg font-extrabold mb-3">London Office</h3>
                                <p>Bloomsbury Square, <br>
                                    London WC1B 4EA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ................................................work experiences................................ -->
<div class="">
    <div class="bg-[url('images/bgn-quote.jpeg')]  bg-cover bg-center  bg-no-repeat my-24 ">
    <div class="px-8 py-24">
        <div class="grid lg:grid-cols-3 lg:gap-10">
   
    <div class="grid ">
                    <img src="images/img-blog-29-1280x1280.jpeg" alt="" class="rounded-full">
                </div>
  
    <div class="col-span-2 relative ">
      <div class="tab">
        <button class="tablinks relative" onclick="openCity(event, 'Work_experience')">Work experience</button>
        <button class="tablinks relative" onclick="openCity(event, 'HR_experience')">HR experience</button>
        <button class="tablinks relative" onclick="openCity(event, 'Awards & Honours')">Awards & Honours</button>
        
      </div>
      <div id="Work_experience" class="tabcontent">
    <div>
        <p class="text-justify leading-7 text-sm">Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
        <ul class="list-disc my-5 text-sm">
            <li>
            <span class="font-semibold text-md">2000-2005</span>
            <p class="text-justify leading-7">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
        </li>
        <li>
            <span class="font-semibold text-md">2000-2005</span>
            <p class="text-justify leading-7">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
        </li>
        <li>
            <span class="font-semibold text-md">2000-2005</span>
            <p class="text-justify leading-7">Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
        </li>
        </ul>
    </div>
      </div>

      <div id="HR_experience" class="tabcontent hidden">
        <div class="text-sm">
      <p class="text-justify leading-7">Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources.</p> <br>

      <p class="text-justify leading-7">Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.</p> <br>

      <p class="text-justify leading-7">Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets..</p>
      </div>
      </div>

      <div id="Awards & Honours" class="tabcontent hidden">
      <div>
        <p class="text-justify leading-7 my-5">Phosfluorescently engage worldwide methodologies with web-enabled technology. Interactively coordinate proactive e-commerce via process-centric “outside the box” thinking. Completely pursue scalable customer service through sustainable potentialities.</p>
        <ul class="list-disc">
            <li><p><span class="font-semibold">2002:</span>Objectively innovate empowered manufactured products whereas parallel platforms.</p></li>
            <li><p><span class="font-semibold">2004:</span>Holisticly predominate extensible testing procedures for reliable supply chains.</p></li>
            <li><p><span class="font-semibold">2005:</span>Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p></li>
            <li><p><span class="font-semibold">2009:</span>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p></li>
            <li><p><span class="font-semibold">2012:</span>Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.</p></li>
            <li><p><span class="font-semibold">2018:</span>Holistically pontificate installed base portals after maintainable products.</p></li>
        </ul>
      </div>
      </div>
      </div>
    </div>
  </div>
  </div>
    </div>
    <!-- ................................................work experiences................................ -->  
</div>
    <div class="px-8 my-20">
    <div class="place-self-center text-center lg:w-1/2 mx-auto">
          <h3 class="uppercase text-md my-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">CHECK OUT MY WORK</h3>
          <h2 class="text-3xl font-extrabold mb-5"><span class="text-red-600">Human Resources</span> <br> Portfolio</h2>
          <p class="text-lg mb-10">Enthusiastically mesh long-term high-impact infrastructures vis-a-vis efficient customer service. Professionally fashion wireless leadership rather than prospective experiences.</p>

        </div>
    <div class="grid lg:grid-cols-3 gap-5 mt-14">
          <div class="card relative bg-no-repeat bg-cover cursor-pointer hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-blog-33.jpeg" alt="" class="">
            <div class="image_card animation_card ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-8">
                <h2 class=" text-3xl font-semibold mb-3" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-5 text-sm text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-bussiness Credibly.....</p>
              </div>
            </div>
          </div>

            <div class="grid grid-cols-2 gap-5">
          <div class="card relative bg-no-repeat bg-cover cursor-pointer hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-02.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-2">
                <h2 class=" text-md font-semibold mb-1" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-2 text-xs text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies  rather than just in time initiatives.</p>
              </div>
            </div>
          </div>

          <div class="card relative bg-no-repeat bg-cover cursor-pointer  hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-03.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-2">
                <h2 class=" text-md font-semibold mb-1" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-2 text-xs text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies  rather than just in time initiatives.</p>
              </div>
            </div>
          </div>

          <div class="col-span-2 card relative bg-no-repeat bg-cover cursor-pointer h-56 hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-04.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-8">
                <h2 class=" text-3xl font-semibold mb-3" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-5 text-sm text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-bussiness Credibly.....</p>
              </div>
            </div>
          </div>
          </div>
         
          <div class="grid grid-cols-2 gap-5">
          <div class="card relative bg-no-repeat bg-cover cursor-pointer  hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-02.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-2">
                <h2 class=" text-md font-semibold mb-1" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-2 text-xs text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies  rather than just in time initiatives.</p>
              </div>
            </div>
          </div>

          <div class="card relative bg-no-repeat bg-cover cursor-pointer  hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-03.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-2">
                <h2 class=" text-md font-semibold mb-1" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-2 text-xs text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies  rather than just in time initiatives.</p>
              </div>
            </div>
          </div>

          <div class="col-span-2 card relative bg-no-repeat bg-cover cursor-pointer h-56  hover:shadow hover:shadow-gray-900/600 hover:drop-shadow-2xl  hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none">
            <img class=" w-full h-full cursor-pointer" src="images/img-portfolio-04.jpeg" alt="" class="">
            <div class="image_card animation_card  ">
              <div class="image_card1 absolute bottom-0 text-white text-center px-8">
                <h2 class=" text-3xl font-semibold mb-3" ><span class="text-red-600">HSBC Recruiting</span></h2>
            <p class="mb-5 text-sm text-black text-justify" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Synergistically evolve 2.0 technologies rather than just in time initiatives. Quickly deploy strategic networks with compelling e-bussiness Credibly.....</p>
              </div>
            </div>
          </div>
          </div>
    

        </div>
    </div>
    <?php include('footer.php') ?>
</div>

<!-- ............tab script................... -->
<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active3", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active3";
  }
</script>
<!-- ............tab script................... -->