<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/


//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));



switch(THIS_PAGE){

    case '../index.php':
        $title = "Khanh Trinh's WEB120 Home Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
    case 'research1.php':
        $title = "Research 1";
        $logo = 'fa-home';
        $PageID = 'Research 1: Responsive Webs verse Mobile Apps';
    break;
    case 'research2.php':
        $title = "Research 2";
        $logo = 'fa-home';
        $PageID = 'Research 2: Galleries';
    break;
    case 'research3.php':
        $title = "Research 3";
        $logo = 'fa-home';
        $PageID = 'Research 3: Flexbox';
    break;
    case 'research4.php':
        $title = "Research 4";
        $logo = 'fa-home';
        $PageID = 'Research 4: Shopping Cart';
    break;
    
    case 'contactme.php':
        $title = "Khanh Trinh's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact William';
    break;
        
   
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
   }
$nav1['../index.php'] = "Welcome";
$nav1['index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact William";

$nav2['research1.php'] = "Research 1";
$nav2['research2.php'] = "Research 2";
$nav2['research3.php'] = "Research 3";
$nav2['research4.php'] = "Research 4";

/* 
Creating a function to generate links and apply the class=selected to currently called page

      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact William</a></li>
*/

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}

?>
