<?php
error_reporting(0);
include('includes/config.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>

    

    <title>Medicare Hospitals | Find donor</title>
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
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>
<!-- header -->
<?php include('includes/header.php');?>
<!-- container -->
<div class="container">
    <br><br>

        

 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
    else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
    <div class="d-flex justify-content-center">
        <div class="card w-75">
             <div class="card-body">
                <h3 class="card-title" style="text-align:center; color:#0a4275;">Search for a blood Donor</h3>
    <form name="donar" method="post">
                <div class="row">



    <div class="col-lg-12 mb-4">
        <div class="font-italic">Blood Group<span style="color:red">*</span> </div>
            <div><select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
        <option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
            </select>   
        </div>
        </div>


<div class="col-lg-12 mb-4">
<div class="font-italic">Location </div>
<div><textarea class="form-control" name="location"></textarea></div>
</div>

</div>

<div class="row">
            <div class="col-lg-12 mb-4">
            <div>
                <input type="submit" name="submit" class="btn btn-primary" value="submit" style="cursor:pointer; width:150px;">
                <a href="index.php"><button type="button" class="btn btn-secondary">Back</button></a></div>
            </div>
            </div>
    
</form>   
  </div>
</div></div>


<!-- results -->
        <div class="row">
                   <?php 
if(isset($_POST['submit']))
{
$status=1;
$bloodgroup=$_POST['bloodgroup'];
$location=$_POST['location'];
$sql = "SELECT * from tblblooddonars where (status='$status' and BloodGroup='$bloodgroup') ||  (Address='$location')";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
<br><br>
            <div class="col-lg-4 col-sm-6 portfolio-item"><br><br>
                <div class="card h-100">
                    <a href="#"><img class="card-img-top img-fluid" src="images/user.jpg" alt="" ></a><br>
                    <div class="card-block">
                        <h5 class="card-title" style="color:blue;">&nbsp&nbsp<?php echo htmlentities($result->FullName);?></h5>
                        <p class="card-text"><b>&nbsp&nbspMobile No :</b> <?php echo htmlentities($result->MobileNumber);?></p>

                        <p class="card-text"><b>&nbsp&nbspE-mail :</b> <?php if($result->EmailId=="")
                        {
                        echo htmlentities("NA");
                        } else {
                        echo htmlentities($result->EmailId);
                        }
                        ?></p>
                        <p class="card-text"><b>&nbsp&nbspGender :</b> <?php echo htmlentities($result->Gender);?></p>
                        <p class="card-text"><b>&nbsp&nbspAge:</b> <?php echo htmlentities($result->Age);?></p>
                        <p class="card-text"><b>&nbsp&nbspBlood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
                        <p class="card-text"><b>&nbsp&nbspAddress :</b>              
                        <?php if($result->Address=="")
                        {
                        echo htmlentities('N/A');
                        } else {
                        echo htmlentities($result->Address);
                        }
                        ?></p>
                            

                                            </div>
                                        </div>
                                    </div>

                                    <?php }}
                        else
                        {
                        echo htmlentities("No Record Found");

                        }


            } ?>
          
 
          


        </div>
        

        <br>
</div><div><br></div><br>
</div><br>
</div>
</div>
<!-- footer -->
  <?php include('includes/footer.php');?>

</body>

</html>
