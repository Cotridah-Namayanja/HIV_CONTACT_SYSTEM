<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Patient Information</title>
   <style>
      td{
         padding:20px;
         padding-left:200px;
      }
   </style>
<link rel="stylesheet" href="home.css">
<link rel="stylesheet" href="getdata.css">
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
            <a href="home.html" >Home</a>
        
            <a href="register.html">Register</a>
        
            <a href="retrieve.php">Retrieve</a>
            
        </div>
    </div>
    
    <hr>
    <br><br><br><br><br>
    <center><h2>PATIENT PARTCULARS</h2></center>
   
    <div class="data">




<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'health';
   $Patient_ID = $_POST['Patient_ID'];
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   
   $sql = "SELECT * FROM register_patient WHERE Patient_ID = '$Patient_ID'" ;
   $retval = mysqli_query($conn, $sql);
   if ($retval) {
      # code...
      
      while($row = mysqli_fetch_array($retval)) {
         echo "
         <table border=3px style= 'td{padding=20px}'>
         <tr>
         <th> Patient ID </th>
         <td> {$row['Patient_ID']} </td>
         </tr>
         <tr>
         <th> First Name </th>
         <td> {$row['First_Name']} </td>
         </tr>
         <tr>
         <th> Last Name </th>
         <td> {$row['Last_Name']} </td>
         </tr>
         <tr>
         <th> Date of Birth </th>
         <td> {$row['DOB']} </td>
         </tr>
         <tr>
         <th> Place of Birth </th>
         <td> {$row['Place_of_Birth']} </td>
         </tr>
         <tr>
         <th> Place of Residence </th>
         <td> {$row['Place_of_Residence']} </td>
         </tr>
         <tr>
         <th> Gender </th>
         <td> {$row['Gender']} </td>
         </tr>
         <tr>
         <th> Date of HIV Diagnosis </th>
         <td> {$row['Date_of_HIV_Diagnosis']} </td>
         </tr>
         <tr>
         <th> Occupation </th>
         <td> {$row['Occupation']} </td>
         </tr>
         <tr>
         <th> Contact </th>
         <td> {$row['Contact']} </td>
         </tr>
         <tr>
         <th> CDR Count </th>
         <td> {$row['CDR_count']} </td>
         </tr>
         <tr>
         <th> Viral Load </th>
         <td> {$row['viral_load']} </td>
         </tr>
         <tr>
         <th> ART Regimen </th>
         <td> {$row['ART_Regimen']} </td>
         </tr>
         <tr>
         <th> Next of Kin </th>
         <td> {$row['NoK']} </td>
         </tr>
         <tr>
         <th> Next of Kin Contact</th>
         <td> {$row['NokContact']} </td>
         </tr>
         
         
         </table>
         ";

            "--------------------------------<br>";
            
      }
      

      while($row !== mysqli_fetch_array($retval)) {
         echo 'die';
      }
   } else {
      # code...
      echo 'die';
   }
   
?>
</div>
<br>
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