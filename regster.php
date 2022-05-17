
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/rag.css">
    <title>Document</title>
</head>

<body>
    <div class="regester">
        <h1 class="header">Sign Up</h1>
        <hr>
        <form action="insert.php" method="POST">
            <div class="display">
                <input type="text"  class="form-control names" placeholder="First Name" name="fname" id="" required>
                <input type="text"  class="form-control names" placeholder="Last Name" name="lname" id="" required>
                <br>
            </div>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  required /> 
            <input type="password" name="pass"class="form-control" id="inputPassword2" placeholder="Password" required />
            <input type="number" name="phone" class="form-control" id="" placeholder="phone number" required/>
            <input type="text" name="addres" class="form-control" id="" placeholder="Your address" required />
            <input type="text" name="gender" class="form-control" id="" placeholder="Your gender" required />
         <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
        <!-- <input type="submit" name="submit"value="submit"> -->
    <a href="log.php"><button type="button" class="btn btn-primary form-control">Back to login</button>
    </a>
        </form>
    </div>
</body>

</html>

<?php 
include 'insert.php';
?>
