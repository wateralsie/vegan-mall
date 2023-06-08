<?php
    $help_id = $_GET["help_id"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
          
    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "update helps set subject='$subject', content='$content' ";
    $sql .= " where help_id=$help_id";
    mysqli_query($connect, $sql);

    mysqli_close($connect);     

    echo "
	      <script>
	          location.href = 'help_list.php?page=$page';
	      </script>
	  ";
?>