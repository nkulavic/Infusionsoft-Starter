
<?

require_once("src/isdk.php");
$app = new iSDK;
$app_name = ''; // Replace with Your Infusionsoft APP Name
$app_key = ''; // Replace with Your Infusionsoft API Key
if ($app->cfgCon($app_name, $app_key)) {
	// Connected to Infusionsoft - Run Your Code Below
}
?>