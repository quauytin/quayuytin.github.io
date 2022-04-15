<?php
	/*** YOUR WEBSITE CONFIG ***/

$config = array(
    /*** Database Config ***/
'LOCALHOST' => 'localhost', // mysql host service
'USERNAME' => 'shoppuno_ff', // username
'PASSWORD' => 'shoppuno_ff', // password
'DATABASE' => 'shoppuno_ff', // database name

'facebook_app_id' => '212892040556101',
'facebook_app_key' => 'edf6447217ff2e1adf0a94908e07bf01',
'home' => 'https://shoppunoff.xyz', // url website có ssl và không có / ở cuối

    /*** Gạch Thẻ Config ***/   
'CALLBACK_URL' => 'http://'.$_SERVER['SERVER_NAME'].'/model/card_callback.php', // Không thay đổi
'version' => '7.3.0', // Phiên bản mã nguồn hiện tại
'author' => 'Puno FF',
'contact' => 'https://facebook.com/'
);
?>