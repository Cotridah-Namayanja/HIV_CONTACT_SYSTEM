<?php
$PatientID = $_POST["Patient_ID"];
$FirstName = $_POST["First_Name"];
$LastName = $_POST["Last_Name"];
$DOB = $_POST["DOB"];
$PlaceofBirth = $_POST["Place_of_Birth"];
$PlaceofResidence = $_POST["Place_of_Residence"];
$Gender = $_POST["Gender"];
$Date_of_HIV_Diagnosis = $_POST["Date_of_HIV_Diagnosis"];
$Marital_status = $_POST["Marital_status"];
$Occupation = $_POST["Occupation"];
$Contact = $_POST["Contact"];
$CDR_count = $_POST["CDR_count"];
$viral_load = $_POST["viral_load"];
$ART_Regimen = $_POST["ART_Regimen"];
$NoK = $_POST["NoK"];
$NokContact = $_POST["NokContact"];
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "health");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO register_patient(Patient_ID, First_Name, Last_Name, DOB, Place_of_Birth, Place_of_Residence, Gender, Date_of_HIV_Diagnosis, Marital_status, Occupation, Contact, CDR_count, viral_load, ART_Regimen, NoK, NokContact ) VALUES ('$PatientID', '$FirstName', '$LastName', '$DOB', '$PlaceofBirth', '$PlaceofResidence', '$Gender', '$Date_of_HIV_Diagnosis', '$Marital_status', '$Occupation', '$Contact', '$CDR_count', '$viral_load', '$ART_Regimen', '$NoK', '$NokContact')";
if(mysqli_query($link, $sql)){
    echo "Patient Registered successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>