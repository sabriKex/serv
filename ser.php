<?php
// $_SERVER['PHP_SELF']    	      يقوم بإرجاع اسم ملف مع اسم مجلد الذي يتواجد ملف بها
// $_SERVER['SCRIPT_FILENAME'];               يقوم بإرجاع عنوان مسار ملف حاليًا بالكامل  
// $_SERVER['REQUEST_METHOD']   POST إرجاع طريقة الطلب المستخدمة للوصول إلى الصفحة مثل 
// $_SERVER['QUERY_STRING']                    يقوم بجلب لك البيانات المتواجدة بالرابط 

// $_SERVER['SERVER_ADDR']	                    يقوم بإرجاع عنوان اي بي لخادم المضيف
// $_SERVER['SERVER_NAME']	domain name                           إرجاع اسم الخادم المضيف للموقع
// $_SERVER['REMOTE_ADDR']	يقوم بإعادة عنوان اي بي مكان الذي يتصفح المستخدم لموقعك


echo  $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>"; 
echo  $_SERVER['REMOTE_ADDR']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";
?>
