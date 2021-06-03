<?php
    include('db-connection.php');

    $id = $_GET['eid'];

    $fetchq = mysqli_query($connection,"select * from tbl_user where user_id='{$id}'") or die (mysqli_error($connection));
    $row = mysqli_fetch_array($fetchq);

    if($_POST)
    {
        $name = $_post['text1'];
        $gender = $_POST['text2'];
        $dob = $_POST['text3'];
        $email = $_POST['text4'];
        $mobile = $_POST['text5'];
        $address = $_POST['text6'];
        $pass = $_POST['text7'];	
        $area = $_POST['text8'];
        $pin = $_POST['text9'];
        $blood = $_POST['text10'];

        mysqli_query($connection, "update tbl_user set user_name='{$name}',user_gender'{$gender}', user_dob='{$dob}',user_email='{$email}', user_mobile='{$mobile}',user_address='{$address}', user_password='{$pass}', user_area='{$area}', uesr_pincode='{$pin}', user_bloodgroup='{$blood}' where user_id='{$_GET['eid']}'");

        header("loaction: index.php");

    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="style/form-style.css">
<title>Registration Form</title>
</head>
<body>
<!--Form start-->
<div class="wrapper">
  <div class="title">
    Edit Data
  </div>
  <form method="POST">
  <div class="form">
    <div class="input_field">
      <input type="text" value="<?php echo $row['user_name']; ?>" name="text1" placeholder="Name" class="input">
      &nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $row['user_gender']; ?>" name="text2" placeholder="Gender" class="input">
    </div>
    <div class="input_field">
      <input type="date" value="<?php echo $row['user_dob']; ?>" name="text3" placeholder="Birth Date" class="input">
      &nbsp;&nbsp;&nbsp;
      <input type="Email" value="<?php echo $row['user_email']; ?>" name="text4" placeholder="Email" class="input">
    </div>
    <div class="input_field">
      <input type="number" value="<?php echo $row['user_mobile']; ?>" name="text5" placeholder="Mobile" class="input">
      &nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $row['user_address']; ?>" name="text6" placeholder="Address" class="input">
    </div>
    <div class="input_field">
      <input type="text" value="<?php echo $row['user_password']; ?>" name="text7" placeholder="Password" class="input">
      &nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $row['user_area']; ?>" name="text8" placeholder="Area" class="input">
    </div>
    <div class="input_field">
      <input type="number" value="<?php echo $row['user_pincode']; ?>" name="text9" placeholder="PinCode" class="input">
      &nbsp;&nbsp;&nbsp;
      <input type="text" value="<?php echo $row['user_bloodgroup']; ?>" name="text10" placeholder="BloodGroup" class="input">
    </div>
    <div class="input_field">
        <input class="btn" type="submit">
    </div>
</div>
</form>
<!--Form End-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>