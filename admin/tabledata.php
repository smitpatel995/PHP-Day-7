<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="style/style.css">
</head>

<body class="dark-edition">

<?php
                    include('db-connection.php');

                  /*delete function*/
                  if(isset($_GET['did']))
                  {
                    mysqli_query($connection, "delete from tbl_user where user_id='{$_GET['did']}'") or die (mysqli_error($connection));
                    /*redirect*/
                    header("location: index.php");

                  }


                  /*delete function over*/

                    $q =  mysqli_query($connection, "select * from tbl_user") or die(mysqli_error($connection));

                    echo "<table class=table>";

                    echo   "<thead class=text-primary>";
                    echo   "<th>ID</th>";
                    echo   "<th>Name</th>";
                    echo   "<th>Gender</th>";
                    echo   "<th>D-O-B</th>";
                    echo   "<th>Email</th>";
                    echo   "<th>Mobile</th>";
                    echo   "<th>Address</th>";
                    echo   "<th>Password</th>";
                    echo   "<th>Area</th>";
                    echo   "<th>Pincode</th>";
                    echo   "<th>Blood</th>";
                    echo   "<th colspan='2'>Action</th>";
                    echo "</thead>";
                    while ($row =  mysqli_fetch_array($q)) {
                      echo "<thead class=text-primary>";
                      echo "<tr>";
                      echo "<td>{$row['user_id']}</td>";
                      echo "<td>{$row['user_name']}</td>";
                      echo "<td>{$row['user_gender']}</td>";
                      echo "<td>{$row['user_dob']}</td>";
                      echo "<td>{$row['user_email']}</td>";
                      echo "<td>{$row['user_mobile']}</td>";
                      echo "<td>{$row['user_address']}</td>";
                      echo "<td>{$row['user_password']}</td>";
                      echo "<td>{$row['user_area']}</td>";
                      echo "<td>{$row['user_pincode']}</td>";
                      echo "<td>{$row['user_bloodgroup']}</td>";
                      echo "<td><a href='tabledata.php?did=$row[0]'>Del</a></td>";
                      echo "<td><a href='edit.php?eid=$row[0]'>Edit</a></td>";
                      echo "</tr>";
                    }
                    echo "</table>";
    ?>




</body>

</html>
