<?php

    include('db-connection.php');

                  if(isset($_GET['did']))
                  {
                    mysqli_query($connection, "delete from tbl_user where user_id='{$_GET['eid']}'") or die (mysqli_error($connection));
                    /*redirect*/
                    header("location: index.php");

                  }


?>