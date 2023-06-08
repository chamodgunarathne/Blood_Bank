<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Medicare Hospitals | About donating</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css" integrity="sha384-X8QTME3FCg1DLb58++lPvsjbQoCT9bp3MsUU3grbIny/3ZwUJkRNO8NPW6zqzuW9" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body>

<!-- header -->
<?php include('includes/header.php');?>
<!-- Content -->
    <div class="container-fluid">
<div class="row">
<div class="col-5">
<img src="images/don.jpg" height="600px">
</div>
    <div class="col-7" style="background-color:#E1DDDE;">
    <br>
<h3>About Blood donation</h3>
<br>
<p>&nbsp&nbsp&nbspThe ABO blood group system was discovered by Karl Landsteiner in 1900. 46 years later (1946) the Blood Transfusion Service was formed. In 1950 the National Blood Service was formed to collect and provide blood supplies for all the hospitals in Sri Lanka.

Blood comes in four main types - O, A, B and AB. Group O is the most common which means it is in high demand. Blood can also be subdivided into its main components - red cells, white cells, platelets and plasma. Unfortunately red cells only have a shelf-life of 35 or 42 days, while platelets shelf life is even less, only five days.

Almost anyone between the ages of 18 and 55 can become a new blood donor. And those who are regular donors can continue to donate till 60.
<br><br>&nbsp&nbsp&nbsp
The average adult has around 5 trillion red blood cells in one litre of blood. Which means you have on average 25 trillion red cells running around inside you, although 25 million (or 0.1%) of them die every day. That works out at roughly 300 a second.

William Harvey was the first physician to discover that blood circulates round the body back in 1628. Sir Christopher Wren (St Paul's Cathedral Christopher Wren) actually injected fluids into the circulation of animals, using an instrument invented by the aforementioned Mr Harvey.

The first successful blood transfusion was carried out in 1665 by Dr Richard Lower. He used dogs as the donor and recipient. However, when they started performing transfusions on humans, they couldn't understand why the people receiving the blood kept dying. It wasn't until 1900 that Dr Karl Landsteiner discovered the ABO blood group system and realised that human patients needed to be given compatible blood. He got the Nobel Prize for his discovery.</p>
  </div></div>
<br>
</div>
<div class="container">
<h4>Who can donate blood?</h4>
<p>The person must fulfill several criteria to be accepted as a blood donor. These criteria are set forth to ensure the safety of the donor as well as the quality of donated blood.</p>

<h4>Donor Selection Criteria</h4>
<p>
    <ul>
        <li>Age above 18 years and below 60 years.</li>
        <li>If previously donated, at least 4 months should be elapsed since the date of previous donation.</li>
        <li>Hemoglobin level should be more than 12g/dL. (this blood test is done prior to each blood donation)</li>
        <li>Free from any serious disease condition or pregnancy.</li>
        <li>Should have a valid identity card or any other document to prove the identity.</li>
        <li>Free from "Risk Behaviours".</li>
    </ul>
</p>
<h4>Risk Behaviours</h4>
<p>
    <ul>
        <li>Homosexuals.</li>
        <li>Sex workers and their clients.</li>
        <li>Drug addicts.</li>
        <li>Engaging in sex with any of the above.</li>
        <li>Having more than one sexual partner</li>
    </ul>
</p>
<h4>Types of donors</h4>
<p>
    <ul>
        <li>Voluntory non remunerated donors. (donate for the sake of others and do not expect any benefit. their blood is considered safe and healthy)</li>
        <li>Replacement donors. (donate to replace the units used for their friends or family members)</li>
        <li>Paid donors. (receive payment for donation)</li>
        <li>Directed donors. (donate only for a specific patient's requirement)</li>
    </ul>
</p>
</div>
  
   
</div>
    <!-- Footer -->
   <?php include('includes/footer.php');?>



</body>

</html>
