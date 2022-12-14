<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300);

        body {
            background-color: #4d5057;
        }

        .input {
            width: 400px;
            margin: 0 auto;
            font-family: Lato, serif;
            font-size: 1.4em;
        }

        .input input {
            width: 400px;
            height: 80px;
            margin-top: 80px;
            font-family: Lato, serif;
            font-size: 1.8em;
            background-color: transparent;
            border: none;
            border-top: 3px solid #4ea5d9;
            border-bottom: 3px solid #4ea5d9;
            outline: none;
            color: #4ea5d9;
            padding-left: 10px;
        }

        .input input:focus + label {
            top: -130px;
            font-size: 1.2em;
            transition: all 0.3s;
        }

        .input label {
            display: block;
            position: relative;
            left: 10px;
            top: -70px;
            font-size: 1.8em;
            cursor: text;
            color: #44cfcb;
            transition: all 0.3s;
        }
    </style>
    <title>Ip address checker</title>
</head>
<body>
<div class="input">
    <form action="checker.php" method="POST">
        <input type="text" name="ip" id="ip"/>
        <label for="ip">Enter the IP address!</label>
        <input type="submit" value="Send">
    </form>
    <footer>
        <p>Created by Wesam Jarrah. © 2022</p>
    </footer>

</div>
</body>
</html>