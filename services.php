
<?php include('header.php') ?>
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
</style>
<div>

  <div class="lg:relative">
    <?php include('nav_header.php') ?>
  </div>
  <div id="" class="-z-20">
    <div>
      <img src="images/bgn-footer.png" alt="" class="h-screen w-screen lg:block hidden">
      <div class="lg:absolute lg:top-[150px] z-30  px-10  lg:mt-5 lg:pt-0 pt-[200px] pb-[200px]">
        <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">SMART HR SOLUTIONS</h3> -->
        <h2 class=" text-3xl font-extrabold mb-5"><span class="text-red-600">A-1 Employment</span> <br> HR Services</h2>
       
        <!-- border-y-2 rounded-lg  border-red-600 -->
        <div class="">
          <div>
            <div class="lg:flex gap-5 items-center mb-10">
              <div class="w-full  drop-b-shadow lg:mb-0 mt-3">
              <div class="lg:mt-0 mb-10 "><img src="images/Untitled design (8).jpg" alt="" loading="lazy" class=""></div>
              </div>
              
              <div class=" py-10 border-y-2 rounded-lg  border-[rgb(56,45,94)] drop-b-shadow">
                <h4 class="text-xl font-semibold mb-3 ">Corporate Recruitment</h4>
                <p class="text-justify leading-7">A-1 Employment and resource India private limited, our recruitment mandate process begins with personal meeting with the clients, understanding clients business and their needs. The process involves post recruitment follow-ups with clients and candidates for feedback after each round of interview.</p>
                  <h4 class="font-semibold mt-5 mb-3">The brief process structures.</h4>
                <ul class="list-disc list-inside leading-8">
                <li>Understanding Job Responsibility.</li>
                <li>Head hunting.</li>
                <li>Screening Interview.</li>
                <li>Follow-ups.</li>
                <li>Final Selections</li>
                  </ul>
                </div>
              </div>
            </div>
            
          <div>
            <div class="lg:flex gap-5 items-center mb-10">
              <div class=" py-10 border-y-2 rounded-lg  border-[rgb(56,45,94)] drop-b-shadow">
                <h4 class="text-xl font-semibold mb-3 ">Payroll Management</h4>
                <p class="text-justify leading-7">Why do companies use payroll service companies to outsource their payroll issues? Simply, because most companies need every moment to spend focused on growing the business, not filling out government forms, tax deductions, setting up employee benefits, insuring compliance with hiring regulations etc.</p> <br>
                <p class="text-justify leading-7">That's why at A-1 Employment AND Resource India Private Limited say focus on your business and leave the rest to us.</p> <br>
                <p class="text-justify leading-7 font-semibold mb-3">The services offered under Payroll Management, is designed to serve as a one-stop solution to all aspects related to employee payroll:</p>
                <ul class="list-disc list-inside leading-8">
                <li>Payroll Processing</li>
                <li>Statutory Compliance </li>
                <li>Leave Record Management</li>
                <li>Attrition Report</li>
                </ul>
                <p class="text-justify leading-7 mt-3"><span class="font-semibold text-black">Confidentiality :</span>We value and ensure complete security & Confidentiality of Client’s data & information.</p>
              </div>
              <div class="w-full drop-b-shadow lg:mb-0 mt-3">
              <div class="lg:mt-0 mt-10"><img src="images/WhatsApp Image 2023-08-26 at 1.10.54 PM.jpeg" alt="" loading="lazy" class="rounded-full"></div>
              </div>
            </div>
          </div>
          <div class="lg:flex gap-5 items-center mb-10">
            <div class="w-full drop-b-shadow lg:mb-0 my-3 ">
            <div class="lg:mt-0 mt-10"><img src="images/WhatsApp Image 2023-08-26 at 3.06.03 PM.jpeg" alt="" loading="lazy" class="rounded-full h-96 w-96 bg-center bg-cover"></div>
            </div>
            <div class="py-10 border-y-2 rounded-lg  border-[rgb(56,45,94)] drop-b-shadow">
              <h3 class="text-xl font-semibold mb-3">Permanent staffing solutions.</h3>
              <p class="text-justify leading-7">Getting the right candidates at the right time is every HR Managers dream A1 Employment AND Resource India Private Limited work towards achieving that dream for you. We have considerable expertise in providing Permanent Staffing at various levels. Our streamlined system is tuned to understand the client requirement and select the right candidate that matches their needs, both technically and culturally.</p> <br>
                <p class="text-justify leading-7">Permanent Staffing is attaining great importance in the human resource industrial stratagem of every company in today's trend. Rightly so as an organization that is equipped with quality and dedicated permanent staff has a greater chance of surviving and succeeding in the long run.</p> <br>
                <p class="text-justify leading-7 font-semibold mb-3">Services Benefit :</p>
                <ul class="list-disc list-inside leading-8">
                <li>Outsourcing Recruitment Activity.</li>
                <li>Wide range of Recruitment Solution.</li>
                <li>Participation in Recruitment.</li>
                <li>Middle & Senior Management.</li>
                <li>Background Screening.</li>
                <li>Good Turnaround time.</li>
                </ul>
            </div>
          </div>
          <div class="lg:flex gap-5 items-center mb-10">
            <div class="py-10 border-y-2 rounded-lg  border-[rgb(56,45,94)] drop-b-shadow">
              <h3 class="text-xl font-semibold mb-3">Office Boy / Peon</h3>
              <p class="text-justify" style="font-family:Barlow,Arial,Helvetica,sans-serif;">A-1 employment is provided services for office boy / peon. We provide services to the Indian corporate. </p> <br>
              <p class="text-justify leading-7 font-semibold mb-3">Responsibilities & Areas Of work :</p>
                <ul class="list-disc list-inside leading-8">
                <li>Reception Work</li>
                <li>Filing & documentation</li>
                <li>Photocopying</li>
                <li>Monitoring the use of equipment and supplies within the office.</li>
                <li>Dealing with queries or requests from the visitors and employees.</li>
                <li>Coordinating the maintenance and repair of office equipment.</li>
                <li>Cooperating with office staff to maintain proper interaction and a friendly environment within the office.</li>
                <li>Assisting other administrative staff in wide range of office duties.</li>
                <li>Office cleaning.</li>
                </ul>
            </div>
            <div class=" drop-b-shadow lg:mb-0 mt-3">
            <img src="A-1_img/icon/peon-services-500x500.webp" alt="" class="w-full" style="border-radius: 60% 90%;">
            </div>
          </div>
        </div>
 
      </div>

    </div>
  </div>

  <div class="lg:h-[2000px]">   
  </div>





      
  </div>

  <?php include('footer.php') ?>
</div>

