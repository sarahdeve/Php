<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand bg-white shadow-sm">
                    <div class="container">
                        <div class="navbar-header">
                            <li class="navbar-brand" ><a href="dashboard.php" style="font-family: forte; color:black;">Instagram</a></li>
                        </div>
                            <div>
                                <input type="search" name="" class="form-control" placeholder="Search..." id="">
                            </div>
                        <ul class="nav navbar-nav">
                             <li class="nav-item">
                             <a href="dashboard.php"><button class="nav-link btn fa fa-home" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        </button></a>
                             </li>
                             <!-- <li class="nav-item">
                             <a href="seconddiv.php"><button class="nav-link btn fa fa-heart" type=""></button></a>
                             </li> -->
                             <li class="nav-item">
                             <a href="uploadpic.php"><button class="nav-link btn fa fa-upload" type=""></button></a>
                             </li>
                            <li class="nav-item dropdown">
                                        <button class="nav-link btn fa fa-user" type="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="seconddiv.php">Profile</a>
                                            <a class="dropdown-item" href="" data-toggle="modal" data-target="#myModal4">SwitchUser</a>
                                            <a class="dropdown-item" href="logout.php">Log out</a>
                                            <div id="myModal4" class="modal" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Switch Accounts</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Some text in the modal.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            </li>    
                        </ul>
                    </div>
                </nav>
</body>
</html>