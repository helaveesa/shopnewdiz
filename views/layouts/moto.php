<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style/css.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Мотосезон открыт!</title>
</head>

<body>

<table align="center" width="900" cellpadding="0" cellspacing="0" border="0" id="main-table">
<tr>
	<td>
        <div id="header"></div>
        <div id="menu">
            <div><a href="index.php">Главная</a></div>
            
            <?php
			$categories = get_cat();
			foreach($categories as $item): 
			?>
<!-- формируем ссылку на категории PC и ноутбук; PC - http://test1.ru/shop/index.php?view=cat$id=pc *** notebook - http://test1.ru/shop/index.php?view=cat$id=notebook -->
            <div><a href="index.php?view=cat$id=<?php echo $item['cat_id'];?>"><?php echo $item['name'];?></a></div>
            
            <?php 
			endforeach;?>
            <div id="cart"><a href="#">Ваша корзина</a> - $</div>
        </div>
    </td>
</tr>
<tr>
	<td id="main-block" valign="top">  
    
    <?php

include($_SERVER['DOCUMENT_ROOT']. '/shop/views/pages/'.$view.'.php'); 
/* подставляя в переменную $view значения и вызывая в адресной строке так: http://test1.ru/shop/index.php?view=cart , где =cart - значение страницы (корзина - cart) можно создать огромное кол-во страниц и подключить таким образом их, меняя центр сайта таким образом */

?> 
    
    <table align="center" cellpadding="0" cellspacing="0" class="product" border="">
            <tr>
                <td valign="top">
                    <div><a href="#"></a></div>
                    <div class="description">
                    
                    
                        <div class="text"><a href="<?php include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php');  ?>">Карта сайта</a></div>
                        <div class="text"><a href="<?php include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php');  ?>">Блог</a></div>
                    </div>
                </td>
            </tr>
    </table>
        <div class="menu" align="right">
            <div class="pokatushki"><a href="<?php include('pokatushki.php'); ?>"><img src="images/menu/pokatushki.png"></a></div>
        </div> 
     
        <div style="clear: both;"></div>
        
        
        <div class="menu" align="center">
        	<div class="glav"><a href="#"><img src="images/menu/naglav.png"></a></div>
        </div>
        <div class="menu" align="left">
            <div class="news"><a href="<?php include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php');  ?>"><img src="images/menu/news.png"></a></div>
        </div>
        <div class="menu" align="center">
            <div class="articles"><a href="<?php include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php');  ?>"><img src="images/menu/articles.png"></a></div>
        </div>
        <div class="menu" align="right">
            <div class="contacts"><a href="<?php include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/pages/'.$view.'.php');  ?>"><img src="images/menu/contacts.png"></a></div>
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