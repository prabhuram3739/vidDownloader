<?php
/*require_once realpath("vendor/autoload.php");
use Vimeo\Vimeo;

$client = new Vimeo("960d6262e855c71820662c232fc44cea5cfb47da", "RTjXD2MvurLAgSpwxnj0wGNZR1/ocOEBPxyAboWju1ljJAaWDh/Wlf/V0x9ejXdb6dkC5sD263yFhLwckLCN/ZL7On92zZ8Xe/PXYafYUOBxpeGi9TLCFUYm1jk5JmRp", "b7cfff034e0a9c1aa4601e88c9b4fc2c");

$response = $client->request('/9011932', array(), 'GET');
print_r($response);*/

$vimeoPage = file_get_contents("https://aiovideodl.ml/?__cf_chl_jschl_tk__=068795e964389aa2176fb0a0a88010f631ba953e-1596718923-0-AZaTqOAHGBBIOYqeMbCLpbc2PWK-aO9Qn21VZmTpM08ZE_JmVdfZPCZsRxzYlrcpjemmgqXEC39AtvbS-hlNFzP9-SvFQvj6ld6EoYQf_wZYVW5OuMFbL8OFWCVFMlzVH_17N5zOGXlTF25ONaTVr9ptqqd7TnHPpackgcM7dbQ3Dq72Mjy5YGkIx17HwsToG7UvH1E9Id4S6Aml9QL46Z_MWYsSmsD0FzH-j2WW9I5DAS81UTXlK4xAXW3O3YPnrS7acqudYYgXhaBauoRrNN8#url=". $_POST['video_link']);
echo $vimeoPage;

?>