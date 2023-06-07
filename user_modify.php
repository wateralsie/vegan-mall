<?php
    $id = $_GET["id"];

    $pw = $_POST["pw"];
    $name = $_POST["name"];
    $email_id = $_POST["email_id"];
    $email_domain = $_POST["email_domain"];

    $email = $email_id."@".$email_domain;
          
    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "update users set password='$pw', name='$name' , email='$email'";
    $sql .= " where username='$id'";
    mysqli_query($connect, $sql);

    mysqli_close($connect);     

    echo "
	      <script>
	          location.href = 'home.php';
	      </script>
	  ";
?>

   
