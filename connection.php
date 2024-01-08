
<?php

 $a=array("name","email","subject","massage");

// $insert = false;
$host = "localhost";
$user = "root";
$password = "";
$db_name = " a_1_employement";
$conn = mysqli_connect($host, $user, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL:" . mysqli_connect_errno());
} else {

    if (isset($_POST['name'])) {

        $sql = "INSERT INTO a_1_contact_us(Name, Email, Subject, Massage)
                         VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['subject'] ."','" . $_REQUEST['massage'] . "')";

        if ($conn->query($sql) === TRUE) {
            $_SESSION['status']= "Data submitted Successfully";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
       
            header("location:".$_REQUEST['redirect'].".php");
        
        
    }
}
?>