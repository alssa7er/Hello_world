<?php
require('Master.php');
?>

<html dir="rtl" lang="ar" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" lang="ar" content="text/html;charset=UTF-8" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.1">
    <title>Home Page</title>
    </head>
<body>
    
    <div class="continer">
                     <div style="z-index:-2;top:1px;position:absolute;"><img class="imgs" src="../asset/img/background.jpg" />
                        </div>
           
            <section class="about-home">
              <div class="title">حول RESIS-REO :</div>
              <div class="divider"></div>
              <div class="desc"><br/>RESIS-REO : Real Estate Sale In Syria-Real Estate Online<br/>
                    الالكترونية للعقارات تأسست 2016 على الفيسبوك ليقدم خدماته في جميع أنحاء القطرالعربي السوري ومستمرين لإرضائكم وتقديم الخدمة الأفضل لزبائننا الكرام.<br/>
                    يقدم المتجر السوري الخدمات التالية :<br/>
                    1.  استعراض منازل.<br/>
                    2.  استعراض السيارات<br/>
                    3.  استعراض الشاليهات<br/>
                  بغية البيع والرهن والاجار  يرجى  مراسلتنا  عبر  صفحتنا  للتفاصيل. هدفنا  إرضائكم
                  
                </div>
                <br/><br/>
            </section>
            <div class="house_suggest">
                <div class="house_name">
                    <div class="house_choose">منازل وسيارات ينصح بها :</div>
                    <div class="na_1"><a class="lin">منازل عصرية</a></div>
                    <div class="na_2"><a class="lin">ابراج على المخطط</a></div>
                    <div class="na_1"><a class="lin">ابراج</a></div>
                    <div class="na_2"><a class="lin">شاليهات للبيع</a></div>
                    <div class="na_1"><a class="lin">شاليهات للايجار</a></div>
                    <div class="na_2"><a class="lin">سيارات جديدة</a></div>
                    <div class="na_1"><a class="lin">سيارات مستعملة</a></div>
                    <div class="na_2"><a class="lin">منازل للرهن</a></div>
                    <div class="na_1"><a class="lin">منازل للايجار</a></div>

                </div>
                <div class="img_show">
                    <div class="w3-content w3-section" style="max-width:100%">
                    <img class="imag" src="../asset/img/11.jpg">
                    </div>
                </div>
           </div>
           <div class="Group_buy_h">
                    عروض خاصة
                     </div>
                     <div class="price">
                        <span class="price1">السعر
                        </span>
                        <span class="price2">السعر
                        </span>
                 </div>
             
            <div class="houses_buy">
                 <div class="product_buy">
                <?php require('../controller/give_houses.php');?>
                </div>
            </div>
    </div>
    <div class="footer"> <!-- Marking the footer section -->
            
        <div class="contact" style="color:RGB(200,180,180);">
            <p class="contact-us" >
                FaceBook:<br/><a style="margin-left:40px;" href="www.facebook.com/ali.shamia.5" > alishka_shamia1@hotmail.com</a>
            </p>
            <p class="contact-us">
                Instagram:<br/><a style="margin-left:40px;" href="#" > alishka_shamia1@hotmail.com</a>
            </p>
            <p class="contact-us">
                WhatsApp:<br/> <a style="margin-left:40px;float:left;direction: ltr;" href="#" >+963936078083</a>
            </p>
        </div>
        <div class="site_img">
             <div id="map" style="height: 400px;width: 60%;">   <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCRQytMXThUI0o_GozVAn4WieoGtqFwBV8'></script><div style='overflow:hidden;height:390px;width:500px;'><div id='gmap_canvas' style='height:390px;width:500px;'></div><div><small><a href="http://www.googlemapsgenerator.com/en/">Quickly generate and embed a Google Map on your site!									Click here									Visit our website</a></small></div><div><small><a href="https://buywebsitetrafficreviews.org/">click</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(34.71553936807129,36.724884806884816),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(34.71553936807129,36.724884806884816)});infowindow = new google.maps.InfoWindow({content:'<strong>RESIS-REO</strong><br>KARM EL-LOOZ,Homs, Syria<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3279.826286136379!2d36.7252457846587!3d34.709561188340565!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1482514001607" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
       -->
            </div>
        </div>
   
   
        <div class="copy_right">All Right Reserved at Copyright 2010 - <?php echo date('Y')?>  </div> <!-- Change the copyright notice -->
    </div>
</body>
</html>