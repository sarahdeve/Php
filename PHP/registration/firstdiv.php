
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Document</title>
</head>
<body>
<?php 
    
    include 'dbcredent.php';
    include "navbar.php";
        echo "<br/><br/>";

        // $userId = $_SESSION['userId'];
        // echo $userId;
        $id = $_SESSION['userId'];
        $fetch_from_db = $con->query("SELECT * FROM users WHERE userId = '$id'");
        $f = $fetch_from_db->fetch_assoc();
        // // echo $f; 
        // $fetch_from_db = $con->query("SELECT * FROM post ");
        // $f = $fetch_from_db->fetch_assoc();

        $query = "SELECT username, files FROM users WHERE userId = '$id'";
             $result = $con->query($query);
             $resultfetched = $result->fetch_array();
            //  echo "{$resultfetched['username']}";
?>
<div class="container">
    <div class="row mb-4">
        <div class="col-4">
            <a href=""  data-toggle="modal" data-target="#myModal3">
                <img src="<?php echo "images/".$f['files'];?>" width="210" height="210" style="border-radius: 100px; margin-top: 20px; margin-left: 50px; border: 0px solid black;" alt="" class=""/>
                <!-- <img src="./images/Chat.jpg" width="210px" height="210px" style="border-radius: 50px" alt="" class=""> -->
            </a>    
            <button class="btn">
                    <span class="badge badge-primary"></span>
            </button>
            <div id="myModal3" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content text-center">
                            <div class="modal-header text-center mx-auto">
                                <h4 class="modal-title m-2 mx-auto">Change Profile Photo</h4>
                            </div>
                            <div class="modal-body">
                                <p><button class="border-0 btn btn-sm text-primary" type="file">Upload Photo</button></p>
                            </div>
                            <div class="modal-body">
                                <p><button class="border-0 btn btn-sm text-danger" type="">Remove Current Photo</button></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-8">
            <p class="mt-4"><b><?php echo "{$resultfetched['username']}" ?>,</b>&nbsp;<button class=" btn btn-primary"><a href="profile.php" class="text-white">Edit Profile</a></button>&nbsp;<button class=" btn btn-primary dropdown-toggle"><i class="text-primary">D</i></button></p>
            <p><b>1,348</b> posts  &nbsp; <b>13.5K</b> followers  &nbsp; <b>22</b>  following</p>
            <p><b></b> Software Developer</p>
            {Bio}
        </div>
    </div>    
    </div>
</body>
</html>