<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="profile.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php 
    include "dbcredent.php";    
    include "navbar.php" ;

    $query = "SELECT username, files FROM users";
    $result = $con->query($query);
    $resultfetched = $result->fetch_array();
   //  echo "{$resultfetched['username']}";
?>

<script>
                $(document).ready(function(){
        $("#contact-form").on("submit",function(e){
        e.preventDefault();
        if($("#contact-form [name='your_name']").val() === '')
        {
        $("#contact-form [name='your_name']").css("border","1px solid red");
        }
        else if ($("#contact-form [name='your_email']").val() === '')
        {
        $("#contact-form [name='your_email']").css("border","1px solid red");
        }
        else
        {
        $("#loading-img").css("display","block");
        var sendData = $( this ).serialize();
        $.ajax({
        type: "POST",
        url: "get_response.php",
        data: sendData,
        success: function(data){
        $(".response_msg").text(data);
        $(".response_msg").slideDown().fadeOut(3000);
        $("#contact-form").find("input[type=text], input[type=email], textarea").val("");
        }
        });
        }
        });
        $("#contact-form input").blur(function(){
        var checkValue = $(this).val();
        if(checkValue != '')
        {
        $(this).css("border","1px solid #eeeeee");
        }
        });
        });

</script>
<br/><br/>
    <div class="container">
        <div class="row shadow mt-5">
            <div class="col-md-4 p-2 border-right">
                <nav class="nav flex-column nav-fills"  role="tablist">
                    <p class="nav-item"><a data-toggle="fill" class="nav-link active" href="#conctact-form">Edit Profile</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#menu1">Change Password</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#menu2">Apps and Websites</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Email and SMS</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Push Notification</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Manage Contact</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Privacy Security</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Login Activity</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link" href="#">Emails from Instagram</a></p>
                    <p class="nav-item"><a data-toggle="fill" class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </nav>
            </div>
            <div class="col-md-6 p-5 mx-auto tab-content">
            <div class="response_msg"></div>
                    <form name="contact-form" action="" method="post" id="conctact-form" class="container tab-pane active">
                        <div class="form-group">
                                <label for="userName"><img src="./images/chat7.jpg" width="50" height="50" style="" alt="" class="border-radius: 100px;"></label>
                                <span class=""><?php echo"{$resultfetched['username']}" ?><br/>
                                <button type="file" class="btn-sm btn text-primary" multiple>Change Profile Photo</button></span>
                                <!-- <br/> -->
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Name...">
                                <small id="nameHelp" class="form-text text-muted">Help people discover your account by using the name you're known by: either your full name, nickname, or business name.</small>
                                <small id="nameHelp" class="form-text text-muted">You can only change your name twice within 14 days.</small>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput2">Username</label>
                                <input type="text" class="form-control" name="your_username" id="exampleFormControlInput2" placeholder="Username...">
                                <small id="nameHelp" class="form-text text-muted">In most cases, you'll be able to change your username back to oluwasefemii for another 14 days. <a href="">Learn More</a>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput3"><h5>Website</h5></label>
                                <input class="form-control" type="text" name="your_site" id="exampleFormControlInput3" placeholder="Website..."/>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlTextarea1"><h5>Bio</h5></label>
                                <textarea type="text" class="form-control" name="comments" id="exampleFormControlTextarea1" rows="3" cols="28" rows="5" placeholder="Comments"></textarea>
                                <br/>
                                <small id="nameHelp" name="" class="form-text text-muted"><p>Personal Information</p>
                                        Provide your personal information, even if the account is used for a business, a pet or something else. This won't be a part of your public profile.
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput4"><h5>Email</h5></label>
                                <input type="email" class="form-control" name="your_email" id="exampleFormControlInput4" placeholder="name@example.com">
                        </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput5"><h5>Phone</h5></label>
                                <input type="number" name="your_number" class="form-control" id="exampleFormControlInput5" placeholder="Phone number...">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleFormControlInput5"><h5>Gender</h5></label>
                                <input type="gender" class="form-control" id="exampleFormControlInput6" >
                            </div> -->
                            <div class="form-group">
                                <label for="exampleFormControlInput6"><h5>Gender</h5></label>
                                <select id="exampleFormControlInput6" name="gender" class="form-control">
                                    <option selected>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <label class="" for="customCheck1"><h5>Similar Account Suggestions</h5></label>
                                <input type="checkbox" name="checked" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"><h6>Include your account when recommending similar accounts people might want to follow.<a href="">[?]</a></h6></label>
                            </div>
                            <br/>
                            <div class="">
                                <button type="submit" name="submit" value="Submit" id="submit_form" class="btn btn-primary">Submit</button>
                        
                                <span class="ml-5">You must agree before submitting.</span>
                            </div>
                        </form>

                   


                <form id="menu1" class="container tab-pane fade">
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                        <p><a>Forgot Password?</a></p>
                        </div>
                    </div>
                </form>

                <div id="menu2" class="container tab-pane fade">
                    <div class="row">
                        <div class="col">
                            <h2>Apps and Websites</p>
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#menu1">ACTIVE</a></li>
                                <li><a data-toggle="tab" href="#menu2">EXPRIED</a></li>
                                <li><a data-toggle="tab" href="#menu3">REMOVED</a></li>
                            </ul>

                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade in active mx-auto">
                                <h5>These are apps and websites you've used Instagram to log into and have recently used. They can request info you chose to share with them.</h5>
                                <p>You have not authorized any applications to access your Instagram account.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                <h5>These are apps and websites you've used Instagram to log into and may not have used in a while. They may still have access to info you previously shared, but their ability to make additional requests for private info has expired.</h5>
                                <p>You have no expired applications that had access to your Instagram account.</p>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                <h5>These are apps and websites you removed from your account. This means they may still have access to info you previously shared, but can't make additional requests for private info.</h5>
                                <p>You have no removed applications that had access to your Instagram account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu3" class="container tab-pane fade">
                    <h2>Apps and Websites</p>

                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#menu1">SECURITY</a></li>
                        <li><a data-toggle="tab" href="#menu2">OTHER</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="" class="tab-pane fade in active mx-auto">
                            <h5>This is a list of emails Instagram has sent you about security and login in the last 14 days. You can use it to verify which emails are real and which are fake. <a href="">Learn more.</a></h5>
                        </div>
                        <div id="" class="tab-pane fade">
                            <h5>This is a list of the emails Instagram has sent you in the last 14 days that aren't about security or login. You can use it to verify which emails are real and which are fake. <a>Learn more.</a></p>
                            <hr/>
                            <p>We’ve updated our Terms of Use</p>
                            <p>{{Date}}
                            <small>Sent to: oluwasefemi@gmail.com · Sent from: no-reply@mail.instagram.com</small>
                        </div>
                    </div>  
            </div>
        </div>
    </div>
</body>
</html>