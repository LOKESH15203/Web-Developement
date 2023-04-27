<?php

include "portal.php"
<!DOCTYPE html>
<html lang="en">
include
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portal.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="bg">
            <h1> <b> JOB PORTAL</b></h1>
            <nav>
                <ul>
                    <li> <b>
                            <a href="Signp.html" class="link"> Sign Up </a>
                            <a href="h4_Education.html" class="link">Login</a>
                            <a href="h3_Experience.html" class="link">Post</a>
                            <a href="h2_Projects.html" class="link">Search</a>
                     </b></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="form">
    <form class="spac">
        <input type="name" class="space" id="name" placeholder="Enter your name" required>
        <input type="email" class="space" id="email" placeholder="Enter your Email" required>
        <input type="tel" class="space" id="age" placeholder="Enter your agea" required>
        <input type="text" class="space" id="name" placeholder="Enter your Qualification"> <br>
        <input type="file" class="space" id="user_document" placeholder="Upload your documents"> <br>
        <select id="state-city" class="space">
            <option>Choose Location</option>
            <optgroup label="Maharashtra">
                <option>Pune</option>
                <option>Mumbai</option>
            </optgroup>
        </select><br>
        <input type="checkbox" class="fi" id="chechme"> I Accept all the <a href="">Terms and Conditions</a> <br>

        <label for="101"> <!-- The text is also clickable with this lable tag -->
            <input type="radio" class="fi" value="class XI"  id="101"> WEB Developer
        </label>
        <label for="102">
            <input type="radio" class="fi" value="class XII"  id="102"> Android Developer <br><br>
        </label> 
        <button type="submit">Submit</button>
    </form>

    <script src="portal.js"></script>
</body>
</html>

?>