<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>

	
</head>
<body>

<div id="container">
	<h1><?php echo $page_header ?></h1>

	<div id="body">
            <?php 
            if (is_array($firstnames) || is_object($firstnames))
{
            foreach ($firstnames as $object){
                echo $object->firstname . '\'s email address is '. $object->email .'<br/>';
            }
            echo '<br/><hr/><br/>';
}
?>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>