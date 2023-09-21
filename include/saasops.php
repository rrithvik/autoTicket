<?php
# ----------------------------------------------------
# Get DBName / DBHost / do not echo any varibles here |
# ----------------------------------------------------
// Program to display URL of current page. 
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	$link = "https"; 
else
	$link = "http"; 
// Here append the common URL characters. 
$link .= "://"; 
// Append the host(domain name, ip) to the URL. 
$link = $_SERVER['HTTP_HOST']; 
// Append the requested resource location to the URL 
//$link .= $_SERVER['REQUEST_URI']; 
	
// Set Domain and Tenant
$dom1 = trim(strstr($link,"."),".");
$p1 = strpos($link,"."); 
$tenant = substr($link,0,$p1);
$tenantdb = 'aut_' . $tenant;
define('DBNAME',$tenantdb);
define('TNAME',$tenant);

define('TSUB','https://surpaascompaas.com/surpaas/r/autoticketprovider/h/autoticket/t/');
?>