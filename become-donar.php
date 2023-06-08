<?php
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit']))
  {
$fullname=$_POST['fullname'];
$mobile=$_POST['mobileno'];
$email=$_POST['emailid'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blodgroup=$_POST['bloodgroup'];
$address=$_POST['address'];
$message=$_POST['message'];
$status=1;
$sql="INSERT INTO  tblblooddonars(FullName,MobileNumber,EmailId,Age,Gender,BloodGroup,Address,Message,status) VALUES('$fullname','$mobile','$email','$age','$gender','$blodgroup','$address','$message','$status')";
$query = $dbh->prepare($sql);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Your info submitted successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Medicare Hospitals | Become A Donar</title>
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
<!-- content -->
<div class="container">
    <br><br>

        

 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
    else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<div class="d-flex justify-content-center">
 
<div class="card w-75">
  <div class="card-body">
    <h3 class="card-title" style="text-align:center; color:#0a4275;">Register Here to become a Donor</h3>
            <form name="donar" method="post">
            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Full Name<span style="color:red">*</span></div>
            <div><input type="text" name="fullname" class="form-control" placeholder="Enter your full name here" required></div>
            </div>
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Mobile Number<span style="color:red">*</span></div>
            <div><input type="text" name="mobileno" class="form-control" placeholder="Enter your mobile number here" pattern="[0-9]{10}"required></div>
            </div>
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Email Id</div>
            <div><input type="email" name="emailid" class="form-control" placeholder="Enter your e-mail here"></div>
            </div>
            </div>

            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Age<span style="color:red">*</span></div>
            <div><input type="text" name="age" class="form-control" placeholder="Enter your age" min="18" max="60" required></div>
            </div>


            <div class="col-lg-12 mb-4">
            <div class="font-italic">Gender<span style="color:red">*</span></div>
            <div><select name="gender" class="form-control" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            </select>
            </div>
            </div>

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
            </div>


            <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="font-italic">Address</div>
            <div><textarea class="form-control" name="address" placeholder="Enter your address here"></textarea></div>
            </div>

            <div class="col-lg-12 mb-4">
            <div class="font-italic">Message<span style="color:red">*</span></div>
            <div><textarea class="form-control" name="message" required> </textarea></div>
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

</div>
</div>
<br>
<!-- footer -->
  <?php include('includes/footer.php');?>
    

</body>

</html>
