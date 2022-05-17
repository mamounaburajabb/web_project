
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php">My profile</a>
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
<style>
    .home{
        margin-left: 50px;
    }
    .follw{
      margin-left: 15px;
    }
    .size{
      height: 35px;
      background-color: brown;
   border-radius: 15px;
    }
    .c-img{
      margin-right: 10px;
    }
</style>
 
<span class="input-group-text">Write a New Post </span>
<form action="addpost.php" method="post" >
    <div class="input-group">
        <textarea class="form-control" aria-label="With textarea"></textarea>
        <button type="submit" name="submit1" class="btn btn-outline-danger"  > Post </button>
    </div>
</form>
<?php
include_once 'db.php';
$all_users = "SELECT * FROM log WHERE id<>''";
$post_date = "SELECT * FROM post WHERE text1<>'' ";
$result = mysqli_query($conn, $all_users);
$result1 = mysqli_query($conn, $post_date);
while ($row = mysqli_fetch_assoc($result) and $row_post = mysqli_fetch_assoc($result1)){
echo '
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="d-flex justify-content-between p-2 px-3">
                    <div class="d-flex flex-row align-items-center"> <img src="https://cdn-icons-png.flaticon.com/512/42/42994.png" width="50" class="rounded-circle">
                        <div class="d-flex flex-column ml-2"> <span class="font-weight-bold">'.$row["fname"]. " ".$row["lname"].'</span> <small class="text-primary"></small> </div>
                        <div class="follw"><span><button type="submit" class="btn btn-primary size"> Follw </button></span></div>
                        </div>
                    <div class="d-flex flex-row mt-1 ellipsis"> <small class="mr-2">'. $row_post["post_date"] .'</small> <i class="fa fa-ellipsis-h"></i> </div>
                </div> 
                <div class="p-2">
                    <p class="text-justify">'.$row_post["text1"].'</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex flex-row icons d-flex align-items-center"> <i class="fa fa-heart"></i> <i class="fa fa-smile-o ml-2"></i> </div>
                        <div class="d-flex flex-row muted-color"> <span> comments</span></div>
                    </div>
                    <hr>
                    <div class="comments">
                        <div class="d-flex flex-row mb-2"> 
                      <span class="c-img">  <div class="d-flex flex-row align-items-center"> <img src="https://cdn-icons-png.flaticon.com/512/42/42994.png" width="25" class="rounded-circle">
                      </div> </span>  <div class="d-flex flex-column ml-2"> <span class="name">'.$row["fname"].'</span> <small class="comment-text">This is test</small>
                                
                            </div>
                        </div>

                        <div class="comment-input"> <input type="text" class="form-control">
                            <div class="fonts"> <i class="fa fa-camera"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ';}
    ?>
</body>
</html>
