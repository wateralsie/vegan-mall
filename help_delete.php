<?php
    $help_id = $_GET["help_id"];
    $page = $_GET["page"];

    $connect = mysqli_connect("localhost", "user1", "12345", "vegan_mall");
    $sql = "select * from helps where help_id = $help_id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);

    $copied_name = $row["file_copied"];

	if ($copied_name) {
		$file_path = "./data/".$copied_name;
		unlink($file_path);
    }

    $sql = "delete from helps where help_id = $help_id";
    mysqli_query($connect, $sql);
    mysqli_close($connect);

    echo "
	     <script>
	         location.href = 'help_list.php?page=$page';
	     </script>
	   ";
?>