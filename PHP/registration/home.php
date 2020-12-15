<?php 
    // echo 'good';
    include "dbcredent.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <div class="row-5 mt-5">
            <header id="pageHead" class="col-12 col-md-8  mx-auto carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <ol class="carousel-indicators">
                    <li data-target="#pageHead" data-slide-to="0" class="active"></li>
                    <li data-target="#pageHead" data-slide-to="1"></li>
                    <li data-target="#pageHead" data-slide-to="2"></li>
                    <li data-target="#pageHead" data-slide-to="3"></li>
                </ol>
                <div class="row card d-flex mx-auto carousel-item active text-center" style="flex-direction:row;-ms-flex-direction:row;">
                    <div class="col-md-2 mr-4" data-interval="1000">
                        <img src="./images/Chat.jpg" width="100px" height="100px" style="border-radius: 50px" alt="" class="">
                    </div>
                        <div class="col-md-2 mr-4">
                            <img src="./images/koala.jpg" width="100px" height="100px" style="border-radius: 50px" alt="" class="">
                        </div >
                        <div class="col-md-2 mr-4">
                            <img src="./images/icons8_Happy_50px.png" width="100px" height="100px" style="border-radius: 50px" alt="" class="">
                        </div>
                        <div class="col-md-2 mr-4">
                            <img src="./images/chat10.jpg" width="100px" height="100px" style="border-radius: 50px" alt="" class="">
                        </div>
                </div>
            </div>
            <a href="#pageHead" class="text-dark carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#pageHead" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span>
            </a>
        </header>
    </div>
                <?php 
                    $query = "SELECT users.username, users.files, post.post, postTitle, postText FROM `users` JOIN post ON users.userId = post.userId ORDER BY users.userId = post.userId DESC";
                    $ans = $con->query($query)->fetch_all();
                    // echo json_encode($ans);
                    foreach ($ans as $value) {
                        echo "
                            <div class='row mt-5'>
                            <div class='col-8 mx-auto'>
                                <div class='card shadow modal-content'>
                                    <div class='modal-header'>
                                        <h4 class='modal-title'>
                                        <img src='./images/{$value[1]}' width='50px' height='50px' style='border-radius: 50px' alt='' class=''> &nbsp; {$value[0]}
                                        </h4>
                                        <button type='button' class='fa fa-bars bg-white border-0' data-toggle='modal' data-target='#myModal2' ></button>
                                        </div>
                                    <div class='modal-body mx-auto' data-toggle='modal' data-target='#myModal1'>
                                    <img src='./images/{$value[2]}' width='600px' height='500px' style='border-radius: 50px'/>
                                    </div><hr/>
                            <div class='modal-body'>
                            <a href='#' type='' class='btn btn-sm fa fa-heart'></a>
                            <a href='#' type='' class='btn btn-sm fa fa-comment'></a>
                            <br/>
                            <div>{$value[3]}</div>
                            <div>{$value[4]}</div>  
                            </div>
                            </div></div></div>
                            
                            ";
                    }
                    // $query = "SELECT * FROM post ORDER BY postid DESC";
                    // $result=$con->query($query);
                    // while ($row = $result->fetch_array()) 
                    
                    
                    //     {
                    //         // echo "<img src='images/{$row['post']}'";
                    //         // echo "{$ans['username']}";
                            
                    //         echo "
                    //         <div class='row mt-5'>
                    //         <div class='col-8 mx-auto'>
                    //             <div class='card shadow modal-content'>
                    //                 <div class='modal-header'>
                    //                     <h4 class='modal-title'>
                    //                     <img src='./images/{$ans[1][1]}' width='50px' height='50px' style='border-radius: 50px' alt='' class=''> &nbsp; {$ans[1][0]}
                    //                     </h4>
                    //                     <button type='button' class='fa fa-bars bg-white border-0' data-toggle='modal' data-target='#myModal2' ></button>
                    //                     </div>
                    //                 <div class='modal-body mx-auto' data-toggle='modal' data-target='#myModal1'>
                    //                         <img src='images/{$row['post']}'  width='600px' height='500px' style='border-radius: 50px'/>
                    //                 </div><hr/>
                    //          <div class='modal-body'>
                    //          <a href='#' type='' class='btn btn-sm fa fa-heart'></a>
                    //          <a href='#' type='' class='btn btn-sm fa fa-comment'></a>
                    //          {Bio}
                    //          </div>
                    //          </div></div></div>
                            
                    //          ";
                    //     }
                ?>
                            <!-- <div class="modal-body mx-auto" data-toggle="modal" data-target="#myModal">
                            <img src="./images/Chat.jpg" width="600px" height="500px" style="border-radius: 50px" alt="" class="">
                            </div> -->
                            <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            </div>
                            <div id="myModal2" class="modal" role="dialog">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <p>Report</p>
                                        </div>
                                        <div class="modal-body">
                                            <p>Unfollow</p> 
                                        </div>
                                        <div class="modal-body">
                                            <p>Go to post</p>
                                        </div>
                                        <div class="modal-body">
                                            <p>Share to...</p>
                                        </div>
                                        <div class="modal-body">
                                            <p>Copy Link</p>
                                        </div>
                                        <div class="modal-body">
                                            <p>Embed</p>
                                        </div>
                                        <div class="modal-body">
                                            <p data-dismiss="modal">Cancle</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                            <div class="modal" id="myModal1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title"><img src='<?php echo "images/{$row['post']}" ?>' width="50px" height="50px" style="border-radius: 100px;" alt="" class=""></h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body mx-auto" >
                                                   
                                                    <img src="./images/Chat.jpg" width="300px" height="300px" style="" alt="" class="">
                                            </div>
                                            <span class="modal-content">
                                            <i><a href="#" class="fa fa-thumbs-up m-3">&nbsp;<i><a href="#" class="fa fa-thumbs-down"></a></i>&nbsp;<i><a href="#" class="fa fa-comment"></a></a></i><br/>
                                            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, tenetur laudantium voluptate magni sit consequuntur eaque sed necessitatibus minima omnis suscipit. Nesciunt doloremque voluptatem eveniet rem, est enim minima nobis?</span>
                                            </span>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
            </div>
        </div>    
            </div>
        </div>
    </div>
</body>
</html>