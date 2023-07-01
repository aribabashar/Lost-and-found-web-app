<?php

session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    // header("location: index.php");
    
    // exit;
    echo "<script>
window.location.href='Userlogin.php';
alert('Login to submit found item');
</script>";
}

// session_start();

// Assigning usernme of the logged in user into a variable for easy access.
$user = $_SESSION['username'];
?>
<?php include('navbar.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Found Item - Lost & Found</title>
    <link rel="icon" type="image/x-icon" href="images/Logo.png">
    <link rel="stylesheet" href="css/lost.css">
    <!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" type="text/javascript"></script>
</head>
<body>

    <!-- Lost Form -->
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" action="backend/foundform.php"  method="post" enctype="multipart/form-data">
                <ul id="progressbar">
                    <li class="active">Item Details</li>
                    <li>Location</li>
                    <li>Previews</li>
                </ul>
                <fieldset>
                    <h2 class="fs-title">Submit Found Property</h2>
                    <h3 class="fs-subtitle">Please be descriptive when submitting the found item report..</h3>
    <div class="pp">
     <label for="files" class="btn" style="
        cursor: pointer;background: gainsboro; border-radius: 4px;
        padding: 8px;
        margin-top: 11px;
        display: inline-block;
        border: solid #ccc 1px;
        color: #072535;
        font-family: montserrat, arial, verdana;">Upload Image</label>
                    <input id="files" name="upload" accept="image/gif, image/jpeg, image/png" style="visibility:hidden; display:none" type="file"/><br>
                    <label for="files"><img id="image" style="border-radius: 50px; cursor: pointer; border: solid #31ABD1 1px; margin: 8px; padding: 4px; width :100px" src ="images/IMG_20200616_090810_446.jpg">
                    </label>
                    
                </div>
                    <input type="text" name="Iname" id="Iname"  placeholder="Found Item" required/>
                    <textarea id="des" name="dnme" placeholder="Description" maxlength="300" style=" resize: none;"></textarea>
                    <input type="text" name="fname" id="fname"  placeholder="Name of the person who found the item" required/>
                    <input type="email" id="email"  pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" name="email" placeholder="Enter Email"/>
                    <input type="button" name="next" class="next sx action-button" value="Next"/>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Location</h2>
                    <h3 class="fs-subtitle">Please Fill Doc.</h3>
                    <h2 style="font-size: 14px;text-align: left;  padding:0px 0px 8px;    line-height: 21px;
    ;">Location</h2>
     <input type="text" name="location" id="se"  placeholder="eg. Canteen" required/>
    <h2 style="font-size: 14px;text-align: left; padding:18px 0px 8px;    line-height: 21px;
    ;">Date</h2>
    <input id="date" type="date" name="date">
    <h2 style="font-size: 14px;text-align: left; padding:18px 0px 8px;    line-height: 21px;
    ;">Time</h2>
    <input id="time" type="time" name="time">
    <div class="add_field_button" style="display: inline-block;">
    </div>
    <div class="offered">
    </div>
    <input type="button" class="previous qq action-button-previous" value="Previous"/>
    <input type="button" class="next q action-button" value="Next"/>
    </fieldset>
    
                <fieldset>
                    <h2 class="fs-title">PREVIEWS</h2>
    
    <img id="imagex" style="border-radius: 50px; cursor: pointer; border: solid #31ABD1 1px; margin: 8px; padding: 4px; width :100px" src ="images/IMG_20200616_090810_446.jpg">
    
                    <input type="text" id="Iname1"  placeholder="Item Lost" readonly />
                    <textarea  id="des1" placeholder="Description" maxlength="300" style=" resize: none;" readonly></textarea>
                    <input type="text" id="fname1"  placeholder="Owner name" readonly/>
                    <input type="email" id="email1" placeholder="Enter Email" readonly/>
                   
    
                    <h2 style="font-size: 14px;text-align: left;  padding:0px 0px 8px;    line-height: 21px;
    ;">Location</h2>
    
        <input  id="se1"  type="text" placeholder="" readonly />
    
    <h2 style="font-size: 14px;text-align: left; padding:18px 0px 8px;    line-height: 21px;
    ;">Date</h2>
    <input id="date1" type="date" readonly> 
    <h2 style="font-size: 14px;text-align: left; padding:18px 0px 8px;    line-height: 21px;
    ;">Time</h2>
    <input id="time1" type="time" readonly> 

    <div class="e">
       </div>  
    
                    <input type="button" class="previous qqq action-button-previous" value="Previous"/>
                    <input type="submit" class="submit action-button" value="Register"/>
                </fieldset>
    
            </form>
            <!-- link to designify.me code snippets -->
           
            <!-- /.link to designify.me code snippets -->
        </div>
    </div>
    <!-- /.MultiStep Form -->
    
        <script>
        $(document).ready(function() {
        var max_fields      = 6; //maximum input boxes allowed
        var wrapper         = $(".offered"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
       
        var x = 1; //initlal text box count
        
        
       $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
    
                 //text box increment
                $(wrapper).append('<div class="offered1"><input id="files'+x+'"accept="image/gif, image/jpeg, image/png" style="visibility:hidden; display:none" type="file"/><label for="files'+x+'"><img id="image'+x+'" style="cursor: pointer;  margin: 8px; padding: 4px; width :100px ;height:100px;" src="images/upload.png"></label><textarea id="des1'+x+'" class="des1'+x+'"  name="dnme" placeholder="Description" maxlength="300" style="padding-top:18px;padding-bottom: 0px; text-align: center; border-top: 1px solid #ccc;  border-bottom:none;border-left:none; border-right:none; resize: none;"></textarea><a style="position: relative;bottom: 200px;left: 95px;" href="#" class="remove_field"><img id="image'+x+'" style="cursor: pointer; width :20px;" src="images/close.jpg"></a></div>'); //add input box
    
    $("#files1").change(function() {
      filename = this.files[0].name
     
    });
    
        document.getElementById("files1").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image1").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    
          x++; 
    
    $("#files2").change(function() {
      filename = this.files[0].name
     
    });
    
        document.getElementById("files2").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image2").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    }; 
    
    $("#files3").change(function() {
      filename = this.files[0].name
     
    });
    
        document.getElementById("files3").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image3").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    
    $("#files4").change(function() {
      filename = this.files[0].name
     
    });
    
        document.getElementById("files4").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image4").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    
    $("#files5").change(function() {
      filename = this.files[0].name
     
    });

        document.getElementById("files5").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image5").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    
          }
        });
       
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
           
            e.preventDefault(); 
            $(this).parent('div').remove(); 
            x--;
        })
    });
        
        </script>
    
    <script type="text/javascript">
    $("#files").change(function() {
      filename = this.files[0].name
    
     
    });
    
        document.getElementById("files").onchange = function () {
        var reader = new FileReader();
    
        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
             document.getElementById("imagex").src = e.target.result;
        };
    
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
    
    
    </script>
    
    
     <!-- main js-->
     <script type="text/javascript" src="js/main.js"></script>
    <!-- Lost Form End -->
    <?php include('footer.php'); ?>
</body>
</html>