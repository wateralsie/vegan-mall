<?php
    session_start();
    unset($_SESSION["user_id"]);
    unset($_SESSION["user_name"]);

    echo("
        <script>
            location.href = 'home.php';
        </script>
    ");
?>