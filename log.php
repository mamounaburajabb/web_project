<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Document</title>
</head>

<body>
    
    <section class="login">
        <div>
            <form action="check.php" method="post" class="row g-3 formLogin">
                <img src="image/download.jpeg" alt="" width="550px" height="180px" />
                <div class="row-auto">
                    <label for="exampleFormControlInput1" class="form-label visually-hidden">Email address </label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
                </div>
                <div class="row-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" name="pass" class="form-control" id="inputPassword2" placeholder="Password" />
                </div>
                <style>
                    .link :hover {
                        text-decoration: none;
                        color: aliceblue;
                    }
                    
                    .link {
                        text-decoration: none;
                        color: aliceblue;
                    }
                </style>
                <div class="row-auto">
                    <button type="submit" name="submit" class="btn btn-dark mb-3 center">
           <a href="" class="link" > Log In</a>  
            </button>
          
                    <button type="submit" class="btn btn-dark mb-3 center">
                     <a href="regster.php" class   ="link" >
                      Sign Up
                     </a>
                    </button>
                </div>
            </form>
        </div>
    </section>


</body>

</html>
