<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
<body style="background: #FAFAFA">
<?php 
session_start();
include 'dbcredent.php';
include "navbar.php";
echo "<br/>";
include "firstdiv.php";    


// <div class="container mt-5">
//         <div class="row">
//             <div class="col">
//                 <ul class="nav nav-tabs">
//                     <li class="active"><a data-toggle="tab" href="#home">POST</a></li>
//                     <li><a data-toggle="tab" href="#menu1">I G T V</a></li>
//                     <li><a data-toggle="tab" href="#menu2">SAVED</a></li>
//                     <li><a data-toggle="tab" href="#menu3">TAGGED</a></li>
//                 </ul>
                    // <div id="menu1" class="tab-pane mx-auto mt-5 fade">
                    // <h3 class="ml-5">Upload a Video</h3>
                    // <p>Videos must be between 1 and 60 minutes long.</p>
                    // <button class="btn btn-sm btn-primary"><a href="uploadpic.php" class="text-white">Upload</a></button>
                    // </div>
                    // <div id="menu2" class="tab-pane fade mx-auto">
                    // <h3>PICTURES</h3>
                    // <p>Only you can see what you saved.</p>
                    // </div>
                    // <div id="menu3" class="tab-pane fade">
                    // <h3>Menu</h3>
                    // <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui beatae fugiat hic praesentium nihil nostrum ea facilis culpa? Repellendus voluptates necessitatibus mollitia hic expedita atque qui laboriosam maiores commodi dolorem.</p>
                    // </div>
                
//             </div>    
//        </div>     
// </div>
    $id = $_SESSION['userId'];
        $fetch_from_db = $con->query("SELECT post FROM post WHERE userId = '$id'");
        $fech = $fetch_from_db->fetch_all();
         foreach ($fech as $key => $event) {
             echo '
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mr-2 d-flex p-3">
                            <div class="thumbnail">
                            <img src="./images/'.$event[0].'" width="300px" height="300px" style="border-radius: 10px" alt="">
                                <div class="caption">
                                    <p>Lorem ipsum...</p>
                                </div>
                            </div>
                         </div>
                    </div> 
                </div>           
             ';
         }           
?>
    

    </div>  
</body>
</html>