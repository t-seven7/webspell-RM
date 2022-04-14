<?php
/**
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*  
 *                                    Webspell-RM      /                        /   /                                                 *
 *                                    -----------__---/__---__------__----__---/---/-----__---- _  _ -                                *
 *                                     | /| /  /___) /   ) (_ `   /   ) /___) /   / __  /     /  /  /                                 *
 *                                    _|/_|/__(___ _(___/_(__)___/___/_(___ _/___/_____/_____/__/__/_                                 *
 *                                                 Free Content / Management System                                                   *
 *                                                             /                                                                      *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @version         Webspell-RM                                                                                                       *
 *                                                                                                                                    *
 * @copyright       2018-2022 by webspell-rm.de <https://www.webspell-rm.de>                                                          *
 * @support         For Support, Plugins, Templates and the Full Script visit webspell-rm.de <https://www.webspell-rm.de/forum.html>  *
 * @WIKI            webspell-rm.de <https://www.webspell-rm.de/wiki.html>                                                             *
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 * @license         Script runs under the GNU GENERAL PUBLIC LICENCE                                                                  *
 *                  It's NOT allowed to remove this copyright-tag <http://www.fsf.org/licensing/licenses/gpl.html>                    *
 *                                                                                                                                    *
 * @author          Code based on WebSPELL Clanpackage (Michael Gruber - webspell.at)                                                 *
 * @copyright       2005-2018 by webspell.org / webspell.info                                                                         *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 *                                                                                                                                    *
 *¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯*
 */

$language_array = array(
	
	'available'=>'Available',
	'check_chmod'=>'Checking CHMOD',
	'check_requirements'=>'Checking requirements',
	'chmod_error'=>'<b>There are some errors while setting chmod.</b><br>Please set manually chmod 777 to folders and chmod 766 to files',
	'sql_error'=>'_mysql.php has to be writeable or webSPELL cannot be installed.',
	'sql_support'=>'MySQL Support',
	'multibyte_support'=>'Multibyte Support',
	'curl_support'=>'Curl Support',
    'curlexec_support'=>'Curl-Exec Support',
	'allow_url_fopen_support'=>'allow_url_fopen Support',
	'no'=>'No',
	'php_version'=>'PHP Version',
	'set_chmod'=>'Set the CHMOD',
	'setting_chmod'=>'Setting CHMOD...',
	'stylesheet_error'=>'_stylesheet.css has to be writeable or webSPELL will not be working correctly.',
	'successful'=>'Successfully done!',
	'unavailable'=>'Unavailable',
	'unwriteable'=>'Unwriteable',
	'writeable'=>'Writeable',
	'yes'=>'Yes',
	'back' => 'back',
	'admin_email'=>'Admin E-Mail',
	'admin_password'=>'Admin Password',
	'admin_username'=>'Admin Username',
	'data_config'=>'Data configuration',
	'database_config'=>'MySQL Database configuration',
	'finish_install'=>'Finish Installation',
	'finish_next'=>'The next step will finish your installation.<br><br>Do not forget to create a <b>MySQL backup</b> before upgrading!',
	'host_name'=>'Host Name',
	'mysql_database'=>'MySQL Database Name',
	'mysql_password'=>'MySQL Password',
	'mysql_prefix'=>'MySQL Table Prefix',
	'mysql_username'=>'MySQL Username',
	'tooltip_1'=>'This is the server address of your MySQL-Database. This is usually localhost.',
	'tooltip_2'=>'Either something as root or a username given by the hoster.',
	'tooltip_3'=>'For site security using a password for the MySQL account in mandatory.',
	'tooltip_4'=>'Some hosts allow only a certain DB name per site. Use table prefix in this case.',
	'tooltip_5'=>'Use to prevent tabledata collisions. For security, it is generated automatically. You can also take a diffrent prefix.',
	'tooltip_6'=>'This will be your loginname at the site.',
	'tooltip_7'=>'Protect your admin account by a password. Do not use simple passwords. At the best with numbers and different character.',
	'tooltip_8'=>'Your E-Mail address. This is also used for the contact information.',
	'webspell_config'=>'webSPELL configuration',
	'min_requirements' =>'Webspace Minimum Requirements',
	'php_ver'=>'PHP version 5.6 or higher <br> MYSQL version 5.7.20 or higher',
	'pass_ver'=>'Your password must be included',
	'pass_text'=>'8 or more characters - uppercase and lowercase letters <br> 1 or more special characters <br> mindesdens a number'
	
);
?>
