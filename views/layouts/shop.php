﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/css2.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Мотосезон открыт!</title>
</head>

<body>

<table align="center" width="900" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
	<td>
        <div id="header"></div>
        <!--<div id="menu">
            <div><a href="index.php">Главная</a></div>
            <div id="cart"><a href="#">Ваша корзина</a> - $</div>
        </div> -->
    </td>
</tr>
<tr>
	<td id="main-block" valign="top">
<?php

include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php'); 
/* подставляя в переменную $view значения и вызывая в адресной строке так: http://test1.ru/shopnewdiz/index.php?view=cart , где =cart - значение страницы (корзина - cart) можно создать огромное кол-во страниц и подключить таким образом их, меняя центр сайта таким образом */

?>
    <table align="center" cellpadding="0" cellspacing="0" class="product" border="">
            <tr>
                <td valign="top">
                    <div><a href="#"></a></div>
                    <div class="description">
                        <div class="text"><a href="/shopnewdiz/views/pages/map.php">Карта сайта</a></div>
                        <div class="text"><a href="/shopnewdiz/views/pages/blog.php">Блог</a></div>
                    </div>
                </td>
            </tr>
    </table>
    
        
        <div style="clear: both;"></div>
        <div class="page" align="center">
        	<div class="textpage"><a href="#"><img src="images/page.png"></a></div>
        </div>
        	
        
        
    </td>
</tr>
<tr>
    <td id="footer-td">
        <div align="center">
            <div class="footer">&copy; mysite.com 2013 helaveesa.nolder@gmail.com</div>
        </div>
    </td>
</tr>
</table>

</body>
</html>