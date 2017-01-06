<?php
require('../controller/give_house_inf.php');
require('Master.php');
$images=json_decode($_POST["images"],true);
$Object=json_decode($_POST["details"],true);
$Owner=json_decode($_POST["owner"],true);
?>
<html dir="rtl" lang="ar" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" lang="ar" content="text/html;charset=UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.1">
    <title>House Details</title>
        <script>
        $(document).ready(function(){
            
        $("#O_img").mouseover(function() {
            $("#O_img").css({right:'25%',top:'2%', width: '400px', height: '350px' });
        });
        $("#O_img").mouseout(function() {
            $("#O_img").css({right:'0%',top:'0%', width: '190px', height: '162px' });
        });
            

        });
        </script>
    </head>
    <body>
        <div class="continer">
            <div style="background-color:#364247;width:93.4%;height:600px;">
                <span style="border-bottom:1px solid rgba(255,255,255,0.31);width:70%;height:2px;position:absolute;top:0;left:15%;"></span>
                <?php
                if($_POST['details']=='no data'){header('Location:index.php');}
                else{
                            print'<span class="house_img" ><img id="prim_img" src="../asset/img/'.$images[0].'" style="position:absolute;left:7%;top:32%; -width:300px;height:162px"></span>';
                    print '<div class="show_img"></div>';
                    for($i=0;$i<count($images);$i++)
                        if($i<=2){
                            print'<span class="house_img"><img src="../asset/img/'.$images[$i].'" style="position:absolute;left:14%;top:55%;
                            opacity: 0.8;filter: alpha(opacity=80);
                            -webkit-transform: -ms-transform: rotate('.intval($i)*intval(-16).'deg); /* IE 9 */
                            -webkit-transform: rotate('.intval($i)*intval(-16).'deg); /* Chrome, Safari, Opera */
                            transform: rotate('.intval($i)*intval(-16).'deg);width:120px;height:90px"></span>';
                            }
                    }
                ?>

                <span style="border-bottom:1px solid rgba(155,155,155,0.31);width:55%;height:2px;position:absolute;top:15%;left:33%;"></span>
         
                <div  class="owner">
                 <span class="owner_inf">
                    <p> المالك :&nbsp;&nbsp;<?php print $Owner[0]["Owner_name"];?></p>
                    <p>الايميل :&nbsp;&nbsp;<?php print $Owner[0]["Owner_mail"];?> </p>
                    <p>الهاتف :&nbsp;&nbsp;<?php print '<span style="float:left;direction:ltr;">'.$Owner[0]["Owner_phone"].'</span>';?> </p>
                  </span>
                  <span class="owner_img" >
                      
                    <?php
                      print '<img id="O_img"  src="../asset/img/'.$Owner[0]["Owner_img"].'" 
                      name="OrteliusWorldMap"  style="position:absolute;width:190px;height:162px;border-radius:50%;                    
                      ">';
                    ?>
                      <span id="img_Owner_show" class="center-div">
                          <?php
                      print '<img  src="../asset/img/'.$Owner[0]["Owner_img"].'" style="position:absolute;width:400px;height:300px;">';
                        ?>
                  
                      </span>
                  </span>
                </div>
                <span style="border-bottom:1px solid rgba(155,155,155,0.31);width:55%;height:2px;position:absolute;top:30%;left:33%;"></span>
                <span class="price_des"></span>
                <?php
                print '<span class="house_price">'.'</span>';
                ?>
                <span style="border-bottom:1px solid rgba(155,155,155,0.31);width:55%;height:2px;position:absolute;top:62%;left:33%;"></span>
                <button class="buy" style="background-color:#263238;" onclick="location.href='Show_Game.php?id=4'" value="شراء">شراء</button>
            </div>
                <span class="help_buy">لمزيد من المعلومات حول كيفية الشراء <a href="#">اضغط هنا</a></span>
                <div style="position:absolute;top:109%;right:5.5%;width:88%; height:60%;z-index:11;background-color:#263238;">
                <div style="position:absolute;top:5%;right:5%;font-size:36px;" >وصف العبة</div>
                <span style="border-bottom:1px solid rgba(155,155,155,0.31);width:75%;height:2px;position:absolute;top:19%;z-index:15;left:12%;"></span>
                 <?php 
                 print '
                 <div class="video-item" >
                 <div style="margin-top:25px;margin-bottom:120px;">
                 <iframe   frameborder="0" style="width:60%;height:300px;" src="'.'"></iframe>
                 </div>
                 </div>          

                 ';
                 ?>
                 </div>
        </div>
    </body>
</html>