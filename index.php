<?php

include('db_functions.php');

$view = empty ($_GET['view']) ? 'index' : $_GET['view']; 

include($_SERVER['DOCUMENT_ROOT']. '/shopnewdiz/views/layouts/moto.php');  

?>	