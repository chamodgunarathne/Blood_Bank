
    
    <style>

      ul li:hover{
        
        font-family: monospace;
        
      }
      #admin {
        text-decoration:none;
        color:#b87a96;
      }
      #name{
        font-family:monospace;
        font-size:22px;
        color:white;
            }
      #name:hover{
        color:#D97993;
        transform: scale(1.2);
      }
    </style>
    <nav class="navbar sticky-top  navbar-expand-lg navbar-dark" style="background-color: #6F0220;">

    <div class="container-fluid" >
    <a class="nav-link active" aria-current="page" href="index.php" id="name">Medicare Hospitals</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
      <li class="nav-item">
          <a class="nav-link" href="page.php?type=aboutus">About blood donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="become-donar.php">Donate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="search-donor.php">Search Blood</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        
        
      </ul>
      <ul class="nav navbar-nav justify-content-end" >
      <li id="admin"><a href="admin/index.php" id="admin"><span class="glyphicon glyphicon-user"></span>&nbsp&nbspAdmin</a></li>
      
    </ul>
    </div>
  </div>

</nav>