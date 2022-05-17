      
<?php 
  include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="css/home.css">
          <title>Document</title>
  </head>
      <body>
      <div class="nav1" style>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Frindbook</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="profile.php">My profile</a>
            </li>
            <li>
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </li>
            <li class="nav-item nav-item1">
              <a class="nav-link nav-link1" href="log.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    </div>
      <div>
           <img src="https://cdn-icons-png.flaticon.com/512/42/42994.png" class="img-thumbnail img-thumbnail1" alt="..."  >
           <h4 class="profile">Your Name</h4>
           <div>
             <h6 class="profile"  >your Email:</h6>
             <h6 class="profile"  > your phone: </h6>
             <h6 class="profile"> Gender: </h6>
             <h6 class="profile">your addres: </h6>
           </div>

      </div>  
    </html>
    <style>
      .profile
{
    margin-left: 12px;
}   
    </style>