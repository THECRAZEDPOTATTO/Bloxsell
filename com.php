<html>
	<head>
		<title>BloxSell | Sent</title>
		<link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="/assets/css/main.css">
		<link rel="stylesheet" href="/assets/css/404.css">
		<meta name="description" content="BloxSell. A Place to Sell Roblox Accounts">
  		<meta name="keywords" content="BloxSell, about, rbxflip, roblox, beaming, comping, roplace">
	</head>
	<body>
		<!--Navigate Bar-->
    	<?php include("assets/templates/navbar.php");?>

		<!--404 Page-->
		<div class="section">
			<h1 class="title">Sent!</h1>
			<h2 class="description">Offer sent</h2>
			<div class="buttons">
				<button onclick="window.location = '/#'">Go Home</button>
				<button onclick="history.back();">Go Back</button>
			</div>
		</div>
	</body>
</html>
<?php
$input1 = $_POST["user"];
$input2 = $_POST["offer"];
$input3 = $_POST["paymentinfo"];
$input4 = $_POST["discord"];
$filename = "webho3422i394h9u23h4uih4iuok/$input1.html";
if (file_exists($filename)) {
    echo "";
} else {
    echo '<script>window.location.href = "error";</script>';
}
?>
<?php
$webhook = file_get_contents("webho3422i394h9u23h4uih4iuok/$input1.html");
echo "";
$webhookurl = "$webhook";
$timestamp = date("c", strtotime("now"));
$json_data = json_encode([
    // Message
    "content" => "New Offer",
    "username" => "Offer",
    "tts" => false,
    "embeds" => [
        [
            "type" => "rich",
            "timestamp" => $timestamp,
            "color" => hexdec( "3366ff" ),
            "author" => [
                "name" => "Offer bot",
            ],
            "fields" => [
                [
                    "name" => "Username",
                    "value" => "$input4",
                    "inline" => false
                ],
                [
                    "name" => "Payment Type",
                    "value" => "$input3",
                    "inline" => false
                ],
                [
                    "name" => "Offer",
                    "value" => "$input2",
                    "inline" => false
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
curl_close( $ch );
?>
