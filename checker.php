<?php
$input = $_POST['ip'];
echo '<div class="main-container">';
if (filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) !== FALSE) {
    echo '<span class="result-container">' . $input . '<br>' . " Is a Valid IPv4" . '</span>';
} elseif
(filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== FALSE) {
    echo '<span class="result-container"> ' . $input . '<br>' . " Is a Valid IPv6" . '</span>';
} else {
    echo "Invalid Ip address";
}
echo '</div>';
?>
<html lang="en">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300);

        .main-container {
            text-align: center
        }

        body {
            background-color: #4d5057;
        }

        .result-container {
            color: #4ea5d9;
            font-size: 50px
        }
    </style>
    <title>Check</title>
</head>
<footer>
    <p>Created by Wesam Jarrah. © 2022</p>
</footer>
</html>