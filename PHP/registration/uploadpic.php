<?php session_start();
    // include "uploadprocess.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="uploadpic.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body style="background: #FAFAFA">
<?php include "navbar.php"; ?>
    <div class="container">
        <div class="row shadow d-flex p-4 bg-white" style="margin-top: 100px;">
            <div class="col-6">
                <div style="background: #FAFAFA;" class="m-5 text-center mx-auto" weight="100px" height="300px">
                    <span> <input type="file" class="form-control border-0" name="image"></span>
                    <h2>Drag and Drop a Video File</h2>
                    <p>Your video must be between 1 and 60 minutes long, landscape or portrait, an MP4 file and less than 3.6 GB.</p>
                </div>
            </div>
            <div class="col-6">
                 <form method="POST" action="uploadprocess.php"  enctype="multipart/form-data">
                     <?php if (!empty($msg));?>
                        <div class="alert <?php echo $msg_class ?>" role="alert" > 
                        <?php echo $msg; ?>
                        </div> 
                            <label for="file" >File</label>
                            <input type="file" name="pic" id="file"  multiple="multiple">
                            <br/>
                            <label for="country" >Country</label>
                                <select id="country" class="form-control" name="post_country">
                                <option value="australia">Australia</option>
                                <option value="canada">Canada</option>
                                <option value="usa">USA</option>
                                <option value="9ja">9ja</option>
                                </select>
                                &nbsp;
                            <div class="form-group">
                                <textarea class="form-control" name="post_title" row="3" placeholder="Title..."></textarea>
                                <label for="my-textarea"></label>
                                <textarea id="text" class="form-control" name="post_text" rows="3" placeholder="Say something about this image..."></textarea>
                            </div>
                            <span class="col-6">
                            <button type="submit" name="submit" class="btn btn-sm btn-primary">POST</button>
                            <a class=" "><b>Save Draft</b></a>
                            </span>
                </form>
            </div>
        </div>
    </div>
</body>
</html>