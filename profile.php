<html>
<?php
include 'config.php';
   if($_SERVER["REQUEST_METHOD"]=="GET"){
    $id=$_GET["id"];
    $result = $con->query("SELECT * FROM BHS WHERE _sfm_unique_id_ ='$id'");
    $row=$result->fetch_assoc();
    $name=$row["Name"];
    $phone1=$row["Phone1"];
    $phone2=$row["Phone2"];
    $phone3=$row["Phone3"];
    $whatsapp=$row["whatsapp"];
    $email=$row["Email"];
    $img_name=$row["photo"];
    $address=$row["Adress"];
       $nickname=$row["nickname"];
            }
?>
   
    <head>
<title><?php echo ("$name"); ?></title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
    <body><div class="profile-card">
    <br>
<div class"image-container">
<img src="\images\<?php echo("$img_name");?>" style="width:75vw;height:auto" class="img" >
<div class="title">
<h2 style="font-size: 4vw" class="title"><?php echo ("$name"); ?> (<?php if($nickname==NULL){echo "Not Submitted";} else echo("$nickname");?>)</h2>
</div>
    </div><div class="main-container"></div>
    <div>
        <p style="font-size: 3vw" class="margin"><i class="fa fa-phone info1" aria-hidden="true" ></i>
<?php  echo("$phone1");?></p>
        <p style="font-size: 3vw" class="margin"><i class="fa fa-phone info1" aria-hidden="true"></i>
<?php if ($phone2>0){echo("$phone2");} else echo ("N/A");?></p>
        <p style="font-size: 3vw" class="margin"><i class="fa fa-phone info1" aria-hidden="true"></i>
<?php if ($phone3>0){echo("$phone3");} else echo ("N/A");?></p>
    <p style="font-size: 3vw" class="margin"><i class="fa fa-whatsapp info2" aria-hidden="true"></i>
<?php if ($whatsapp>0){echo("$whatsapp");} else echo ("N/A");?></p>
    <p style="font-size: 3vw;font-family:serif" class="margin"><i class="fa fa-envelope-o info3" aria-hidden="true"></i>
<?php if($email == NULL){echo ("N/A");} else echo("$email");?><p>
        <p style="font-size: 3vw;font-family: monospace" class="margin"><i class="fa fa-home info4" aria-hidden="true" class="margin"></i><?php echo ("$address");?></p>
  <!--  <p style="font-size: 3vw;font-family:serif" class="margin"><i class="fa fa-facebook-square info5" aria-hidden="true"></i><?php echo("Contact with Webmaster");?>
        </p>-->
    <hr>
        </div>
    </div>
    <br>
        <a href="http://example.com/" class="button1">Go To Home</a>
        <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e3464b920e46607"></script>
     </body>
</html>