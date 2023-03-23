<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
<div class="header">
        <div class="left_header">
            <img src="images/hiv.jfif" alt="">
            <h2>HIVnet</h2>
            </div>
            <div class="middle-header">
                <center><h2> HIV INFORMATION RETRIEVAL SYSTEM</h2></center>

            </div>

        <div class="right_header">
            <a href="home.html">Home</a>
        
            <a href="register.html">Register</a>
        
            <a href="retrieve.php"class="active">Retrieve</a>
            
        </div>
    </div>
    <hr>
    <br><br><br><br><br><br><br><br>
    <div class="getinfo">
        <center>
            <p>Please Enter Patient ID to continue.........</p>
            <br><br><br><br><br>
    <form action="getdata.php" method="post">
        <label for="Patient">Patient ID:</label>
<input type="text" name="Patient_ID" id="" >
 <br><br>
<button type="submit">Get information</button>

    </form>
    </center>
    </div>
    <br><br>
    <div class="get">
        
        <a href="home.html"><img src="images/back.png" alt="">
        Back Home
        </a>
        <a href="register.html">New Patient</a>
    </div>
    <br><br><br><br><br>
    <div class="footer">
        <div class="footer-left">
            <img src="images/hiv.jfif" alt="">
            <h3>HIVnet</h3>

        </div>
        <div class="footer-middle">
            <img src="images/UN-removebg-preview.png" alt="UN logo">
            <img src="images/mhealth-removebg-preview.png" alt="MoH logo">
            <img src="images/taso-removebg-preview.png" alt="TASO logo">
            <img src="images/who-removebg-preview.png" alt="WHO logo">
            

        </div>
        <div class="footer-right">
            <h4>Quick links</h4>
            <hr>
            <a href="Home.html">Back_Home</a>
            <a href="register.html">New_Patient</a>
            <a href="retrieve.php">Patient_Information</a>

        </div>
    </div>
</body>
</html>