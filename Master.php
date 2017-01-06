
<!doctype html>
<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="../asset/style/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="../asset/style/css/style.css">
    <script type="text/javascript" src="../asset/style/js/jquery.js" ></script>
   
</head>
    <body>

	            <div class="Header">
                    <div class="title_name">المتجر السوري لتجارة العقارات والسيارات</div>
                </div>
                <div class="continer">
                           <div class="con_co">
                                <ul id="lists" class="menu_list">
                                <li class="hrefdown"><a class="href_list" href="index.php">الرئيسية</a></li>
                                <li class="hrefdown">
                                    <a class="href_list" href="#">المنازل</a>
                                    <div class="hrefdown-content">
                                        <a href="#">منازل للايجار</a>
                                        <a href="#">منازل للبيع</a>
                                        <a href="#">منازل للشراء</a>
                                        <a href="#">منازل للرهن</a>
                                    </div>


                                </li>
                                <li class="hrefdown">
                                    <a class="href_list" href="#">السيارات</a>
                                    <div class="hrefdown-content">
                
                                   </div>
                                </li>
                                <li class="hrefdown"><a class="href_list" href="#">الاسئلة الشائعة</a>	</li>
                                <li class="hrefdown"><a class="href_list" href="#">أخر العروض</a></li>
                                <li class="hrefdown"><a class="href_list" href="#">اتصل بنا</a></li>
                                    <li class="icon">
                                        <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">&#9776;</a>
                                    </li>
                                </ul>		
                          </div>
                </div>

            <script>
                function myFunction() {
                    var x = document.getElementById("lists");
                    if (x.className === "menu_list") {
                        x.className += "_responsive";
                    } else {
                        x.className = "menu_list";
                    }
                }
            </script>

    
	</body>

</html>