

<?php
// session_start(); 
 include('header.php');
?>
  <?php

  // $a = array("name", "email", "subject", "massage");

  // // $insert = false;
  // $host = "localhost";
  // $user = "root";
  // $password = "";
  // $db_name = "a_1_employement";
  // $conn = mysqli_connect($host, $user, $password, $db_name);

  // if (mysqli_connect_errno()) {
  //   die("Failed to connect with MySQL:" . mysqli_connect_errno());
  // } else {

  //   if (isset($_POST['name'])) {

  //     $sql = "INSERT INTO resume_cv(name, email, address, image, city, postcode, number, message)
  //                        VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['address'] . "','" . $_REQUEST['image'] . "','" . $_REQUEST['city'] . "','" . $_REQUEST['postcode'] . "','" . $_REQUEST['number'] . "','" . $_REQUEST['message'] . "')";

  //     if ($conn->query($sql) === TRUE) {
  //       $_SESSION['status'] = "Thank you for yours details and CV. Data submitted successfully";
  //     } else {
  //       echo "Error:" . $sql . "<br>" . $conn->error;
  //     }
  //     $conn->close();

      // header("location:".$_REQUEST['redirect'].".php");


  //   }
  // }
  ?>

 

  <div class="lg:relative">
    <?php include('nav_header.php') ?>
  </div>
  <div id="" class="-z-20">
    <div>
      <img src="images/Untitled design (38).png" alt="" class="lg:block hidden">
      <div class=" grid lg:grid-cols-2 gap-5 lg:absolute lg:top-[150px]  lg:pt-0 pt-[150px] z-30  px-10">
        <div class="mr-10">
          <div class="  mt-5">
            <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">AVANTAGE MISSION & VISION</h3> -->
            <h2 class=" text-3xl font-extrabold mb-5"><br> <span class="text-red-600">A-1 Employment</span></h2>
          </div>
          <div class="py-5 border-b-2 border-gray-400 text-justify leading-7">
            <p>We are looking for talented people who are doing innovation; big thinking, focusing, and ... all of these are very good. If it looks like you, then you are our contributor. We will go to the extra mile to find and rent you, increase your skills and talents, and make sure you succeed here. A-1 Employment employees are strongly encouraged to use their own initiative and to be flexible. They are given the freedom to shape their roles and to define areas of work that will benefit directly from their individual expertise. This democratic approach encourages open discussion and brings new ideas to the table, ultimately creating a startup advantage..</p>
          </div>


          <div class="my-5 ">
            <p class="leading-7 text-justify">We have a friendly working environment and a flat level of hierarchy in A-1 Employment. The freedom of expression is what we believe. Our staffs are free to listen to their opinions, suggestions and problems in top management, which makes our working environment as closely as weaving families. In this competition driven industry a company is by the Quality of employees it possesses. Hence we encourage our employees to work to the best of their capabilities by instilling the positive competitive spirit. Good work is always appreciated through applauds, awards, appreciation, attractive incentives and mostly importantly by a transparent appraisal policy so as to give an employee what he deserves.</p> <br>
            <p class="leading-7 text-justify text-lg">We organize several competitions to enable our employees to exhibit their skill and talents.</p>
          </div>

          <button class="text-left text-sm bg-red-600 text-white px-8 mr-3 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none" style="font-family:Raleway ,Arial,Helvetica,sans-serif;"><a href="" class="uppercase">JOIN US NOW</a></button>
        </div>

        <div class="">
          <div>
            <img src="images/img-people-02.png" alt="" class="">
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="lg:mt-[250px] mt-[120px] mb-32">
    <div class="lg:w-1/2 m-auto text-center px-8">
      <!-- <h3 class="uppercase text-lg mb-2" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">BECOME A PRO CONSULTANT</h3> -->
      <h2 class=" text-3xl font-extrabold mb-2 mt-[70px]">Would you like <br> <span class="text-red-600">To join us?</span></h2>
      <!-- <p class="py-2 text-lg my-5">Enthusiastically mesh long-term high-impact infrastructures vis-a-vis efficient customer service. Professionally fashion wireless leadership rather than prospective experiences.</p> -->
    </div>

    

    <div class="w-4/5 mx-auto bg-[rgb(241,241,242)] py-10" style="border-radius: 40px;">
    <!-- <?php
    if (isset($_SESSION['status'])) {
    ?>
      <div>
        <p id='msg' class='submitMsg py-4 text-center bg-green-300 mb-10 mx-10'><?php echo $_SESSION['status']; ?></p>
      </div>
    <?php

      unset($_SESSION['staus']);
    }

    ?> -->
      <form action="careers" method="post">
        <div class="grid lg:grid-cols-2 gap-10 p-10">
          <div class="">
            <label for="">Your Name <span class="text-red-600">*</span></label> <br>
            <input type="text" name="name" class="w-full rounded-full p-2.5">
          </div>
          <div>
            <label for="">Your Email <span class="text-red-600">*</span></label> <br>
            <input type="text" name="email" class="w-full rounded-full p-2.5">
          </div>
          <div class="">
            <label for="">Your Address <span class="text-red-600">*</span></label> <br>
            <div><input type="text" name="address" class="w-full rounded-full p-2.5"></div>
          </div>
          <div>
            <label for="">Your Resume <span class="text-red-600">*</span></label> <br>
            <div class="border border-black  rounded-full truncate">
              <input type="file" class="w-full ml-4 m-1  text-sm" name="image">
            </div>
          </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 px-10">
          <div>
            <div class="pb-14">
              <label for="">City <span class="text-red-600">*</span></label> <br>
              <input type="text" class="w-full rounded-full p-2.5" name="city">
            </div>

            <div class="">
              <label for="">Postcode <span class="text-red-600">*</span></label> <br>
              <input type="text" class="w-full rounded-full p-2.5" name="postcode">
            </div>
          </div>

          <div>
            <label for="">Message<span class="text-red-600">*</span></label> <br>
            <textarea name="message" id="" cols="30" rows="6" class="w-full p-2.5" style="border-radius: 40px;"></textarea>
          </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-10 p-10">
          <div class="">
            <label for="">Phone Number <span class="text-red-600">*</span></label> <br>
            <input type="text" class="w-full rounded-full p-2.5" name="number">
          </div>

          <div>
            <!-- ...................-->
          </div>
        </div>

        <div class="px-10">
          <button class="text-left text-sm bg-red-600 text-white px-8 mr-3 py-4 font-semibold rounded-3xl hover:drop-shadow-2xl transition transform hover:-translate-y-1 motion-reduce:transition-none motion-reduce:hover:transform-none uppercase" style="font-family:Raleway ,Arial,Helvetica,sans-serif;">Submit Your CV</button>
        </div>
      </form>

    </div>
  </div>
  <?php include('footer.php'); ?>



