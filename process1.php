<?php
require 'connection.php';

if (isset($_POST["submit"])) {
    $location = $_POST["location"];
    $travcount = $_POST["travcount"];
    $flightname = $_POST["flightname"];
    $passportnum = $_POST["passportnum"];
    $seatnum = $_POST["seatnum"];
    $traveldate = $_POST["traveldate"];
    $passFirstName = $_POST["passFirstName"];
    $passMiddleName = $_POST["passMiddleName"];
    $passLastName = $_POST["passLastName"];
    $gender = $_POST["gender"];
    $localNumber = $_POST["localNumber"];
    $permNumber = $_POST["permNumber"];
    $purposeoftravel = $_POST["purposeoftravel"];
    $numnStreetName = $_POST["numnStreetName"];
    $appartmentNumber = $_POST["appartmentNumber"];
    $city = $_POST["city"];
    $zippostal = $_POST["zippostal"];
    $distStateProvince = $_POST["distStateProvince"];
    $hotelName = $_POST["hotelName"];
    $numStreetNamea = $_POST["numStreetNamea"];
    $districtCity = $_POST["districtCity"];
    $fever = $_POST["fever"];
    $weaknessFatigue = $_POST["weaknessFatigue"];
    $coughing = $_POST["coughing"];
    $achesPain = $_POST["achesPain"];
    $bleedingBrusing = $_POST["bleedingBrusing"];
    $headaches = $_POST["headaches"];
    $vommitingDiarrhoea = $_POST["vommitingDiarrhoea"];
    $difficultBreath = $_POST["difficultBreath"];
    $yellowEyes = $_POST["yellowEyes"];
    $emmFirstName = $_POST["emmFirstName"];
    $emmMiddleName = $_POST["emmMiddleName"];
    $emmLastName = $_POST["emmLastName"];
    $emmCity = $_POST["emmCity"];
    $emmCountry = $_POST["emmCountry"];
    $emmPhoneNumber = $_POST["emmPhoneNumber"];
    $emmEmail = $_POST["emmEmail"];
    $emmTemperature = $_POST["emmTemperature"];



    $query = "INSERT INTO departure VALUES ('', '$location', '$travcount', '$flightname', '$passportnum', '$seatnum', '$traveldate', '$passFirstName', '$passMiddleName', '$passLastName', '$gender', '$localNumber', '$permNumber', '$purposeoftravel', '$numnStreetName', '$appartmentNumber', '$city', '$zippostal', '$distStateProvince', '$hotelName', '$numStreetNamea', '$districtCity', '$fever', '$weaknessFatigue', '$coughing', '$achesPain', '$bleedingBrusing', '$headaches', '$vommitingDiarrhoea', '$difficultBreath', '$yellowEyes', '$emmFirstName','$emmMiddleName', '$emmLastName', '$emmCity', '$emmCountry', '$emmPhoneNumber', '$emmEmail', '$emmTemperature')";

    mysqli_query($con, $query);
    echo " <script> alert('Data inserted successfully'); </script> ";
    header ('location: result.php');
    exit;
}
?>