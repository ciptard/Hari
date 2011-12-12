<?php
/**
* config.php
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @copyright Matthew Harrison-Jones <contact@matthojo.co.uk>
* @package Hari CMS
* @license http://www.opensource.org/licenses/gpl-2.0.php
* @filesource
*/
	
/**
* DEBUG
*
* To debug or not to debug, that is the question.
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @global boolean DEBUG Decides if debug options are enabled or not.
*/
define('DEBUG', false);

/**
* TITLE
*
* The chosen title for the website
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @global string TITLE Sets the title of the website
*/
define('TITLE', "My Timeline");

/**
* AUTHOR
*
* The author of the content of the website
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @global string AUTHOR Sets the author of the website
*/
define('AUTHOR', "CONTENT AUTHOR GOES HERE");

/**
* DIR
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @global string DIR Defines the directory containing the content
*/
define('DIR', 'display/');

/**
* SORT
* This should be ether 'desc' or 'asc', otherwise will default to 'desc'
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
* @global string SORT Sets which way content is display in order of time
*/
define('SORT', 'desc');

/*
* If debug is set to true, enabled the debug options
*
* @param boolean DEBUG This is set in config.php
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
*/
if(DEBUG){
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}

/**
* Sets the default timezone.
*
* @author Matthew Harrison-Jones <contact@matthojo.co.uk>
*/
date_default_timezone_set('GMT');

?>