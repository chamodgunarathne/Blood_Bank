<?php

include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Medicare Hospitals</title>

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
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    
    .navbar a:hover{
        color:yellow;
        text-decoration:none;
    }

    ul a{
        color:white;
        text-decoration:none;
    }
   #wel{
    text-align:center;
   }
   .universal{
    text-align: center;
    top:50%;
  
   }
    </style>

</head>

<body>

    <!-- header -->
<?php include('includes/header.php');?>
<!-- image slider -->
<?php include('includes/slider.php');?>
   
    <!-- Content -->

<br>
        <h1 class="my-4" id="wel">Welcome to Medicare hospitals Blood Bank</h1>
<br>

      
        <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h4 fw-bolder">Become a Donor</h2>
                        <p>You can donate blood by registering by this link and you will be able to give a new life to someone who wants your help.</p>
                        <br><br>
                        <a class="text-decoration-none" href="become-donar.php">
                            Become a Donor
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h4 fw-bolder">Search for a donor</h2>
                        <p>You can find a donor for any kind of blood group from here. We have all kind of blood stocks in our blood bank.</p>
                        <br><br>
                        <a class="text-decoration-none" href="search-donor.php">
                        Search for a donor
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                        <h2 class="h4 fw-bolder">Why it is important</h2>
                        <p>Blood is the most important fact of human being. So whenever someone need blood in case of emergency we have to get that blood from anyone else. so it is very important to donate blood for save a life.</p>
                        <a class="text-decoration-none" href="page.php">
                            About blood donation
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
       
        <section class="bg-light py-5 border-bottom">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">Some of donors</h2>
                    <p class="lead mb-0">Be proud of you by becoming a donor</p>
                </div>
                <div class="row gx-5 justify-content-center">
                <div class="row">
                   <?php 
$status=1;
$sql = "SELECT * from tblblooddonars where status=:status order by rand() limit 6";
$query = $dbh -> prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>

            

            <div class="col-lg-6 col-xl-4">
                        <div class="card mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                
                                <div class="mb-3">
                                <a href="#"><img class="card-img-top img-fluid" src="images/user.jpg" alt="" ></a>
                                <h4 class="card-title"><?php echo htmlentities($result->FullName);?></h4>
                                <p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
                                <p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
                                </div>
                                
                                <div class="d-grid"><a class="btn btn-primary" href="#!">View details</a></div>
                            </div>
                        </div><br>
                    </div>
            <?php }} ?>
        </div></div>
      
                </div>
            </div>
        </section>
<!-- Blood groups details-->
        <section class="py-5 border-bottom">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">
                    <h2 class="fw-bolder">BLOOD GROUPS</h2>
                    <p class="lead mb-0">Give blood | Give birth</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- card-->
                        <div class="card mb-6">
                            <div class="card-body p-6">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                                    <div class="ms-6">
                                        <div class="d-flex justify-content-center"><img src="images/bloodgroup.png" class="img-fluid" ></div>
                                        <br><br>
                                        
                                        <p class="mb-1">&nbsp&nbsp&nbspBlood group of any human being will mainly fall in any one of the following groups.</p>
                                        <ul>
                                            <li>A positive or A negative</li>
                                            <li>B positive or B negative</li>
                                            <li>O positive or O negative</li>
                                            <li>AB positive or AB negative</li>
                                        </ul>
                                        <p class="mb-1">&nbsp&nbsp&nbspA healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
                                        <div class="small text-muted"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
        </section>
      <section> 
    <div class="container">
        <br><br>
<!-- Universal donors -->
<div class="row">
  <div class="col-4"><img src="images/universal.jpg" width="100%"></div>
  <div class="universal col-8 " >
  <h2 class="fw-bolder ">UNIVERSAL DONORS AND RECIPIENTS</h2>
  <h4></h4>
    <p>The most common blood type is O, followed by type A.Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>

            <div class="">
                <a class="btn btn-lg btn-primary btn-block" href="become-donar.php">Become a Donar</a>
            </div>
  </div>
</div>
</div>
</section>
  <br>     
       
  

    <!-- Footer -->
  <?php include('includes/footer.php');?>



</body>

</html>
