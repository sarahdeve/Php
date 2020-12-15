<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-4 card mx-auto" style="border-radius: 10px; center; margin-top: 100px;">
                <form method="post" action="mainsignupprocess.php" enctype="multipart/form-data" class="mt-3">
                    <h2 class="text-center mb-3" style="font-family: forte;">Instagram</h2>
                    <input type="" value="" name="userName" class="form-control" placeholder="Username">
                    <br/>
                    <input type="email" name="email" id="" class="form-control" placeholder="Email">
                    <br/>
                    <input type="file" id="pmyfile" name="myfile" accept=".jpg, .jpeg, .png" class="form-control" placeholder="Files">
                    <br/>
                    <input type="password" name="password"  class="form-control" placeholder="Password">
                    <br/>
                    <input type="submit" name="submit" class="form-control btn btn-sm btn-primary mb-5">
                </form>
            </div>    
        </div> 
    </div>   
</body>
</html>