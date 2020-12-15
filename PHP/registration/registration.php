<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../registration.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
   
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-3 d-flex mx-auto bg-info shadow" style="border-radius: 10px;">  
                <form action="registrationprocess.php" method="POST" class="mx-auto mb-5 mt-5 b-0 text-white">
                    <p class="text-center instagram">Instagram</p>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <br/>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                    <br/>
                    <input type="submit" name="submit" class="btn mx-auto btn-primary"/>
                    <br/>
                    <small>Forgot your login details? Get Help signing in.</small>
                    <br/><br/><br/><br/>    
                    <p class="text-center">OR</p>
                    <span class="bton"><i class=" fa fa-facebook-o"></i>Login in with Facebook</span>
                    <hr/>
                    <div class="lastdiv text-center">Don't havean account? <a href="signup.php" class="">Sign up.</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>