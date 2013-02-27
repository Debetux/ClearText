<?php
require_once('ClearText.inc.php');
//$html = new ClearText('http://www.clubic.com/pc-portable/actualite-544236-dell-wireless-dock-station-accueil-wigig-ultrabook.html');
$html = new ClearText('http://www.journaldugeek.com/2013/02/27/lg-wcp-300/?utm_source=feedburner&utm_medium=feed&utm_campaign=Feed%3A+LeJournalDuGeek+%28le+Journal+du+Geek%29');
$title = $html->getTitle();
$cotent = $html->getContent();
echo $title;
echo $content; 