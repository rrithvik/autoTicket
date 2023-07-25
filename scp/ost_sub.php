<?php
 //-------------------------------------------------   Routine to display iframe called from class.nav.php ----------------------------------------------
require('admin.inc.php');
require_once(INCLUDE_DIR.'class.page.php');
require_once(STAFFINC_DIR.'header.inc.php');
$tenant=TNAME;
$tsub=TSUB;
//echo $tname;

echo "<h2>Loading Subcription Plan for $tenant, Please Wait . . . . .  </h2>";

//------------------------------Get Tokeon ------------------------------------------------------
$execute="pwsh .\ost_gettoken.ps1 $tenant";
//$token = shell_exec($execute);
$token= rtrim(shell_exec($execute)); # Whatever is returned by gettoken.ps1
//$token= "<pre>$output</pre>";
//$sublink= "https://surpaascompaas.com/surpaas/r/autoticketprovider/h/autoticket/t/$tenant?token=$token";
$sublink= "$tsub$tenant?token=$token";
 // Echo $sublink;
//echo DBNAME;
?>
<!--  ------------------ HTML Call to Tenant SurPaaS Portal ----------------------------- -->
<iframe src="<?php echo $sublink ?>" width="945" height="500" scrolling="yes" style="overflow:hidden; margin-top:-4px; margin-left:-6px; border:none;"></iframe>;

<?php
// --------------------------------- Keep Page intact ---------------------------------------------
$nav->setTabActive('manage');
$ost->addExtraHeader('<meta name="tip-namespace" content="' . $tip_namespace . '" />',
    "$('#content').data('tipNamespace', '".$tip_namespace."');");
?>
