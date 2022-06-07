
<html>
	<head>
		<title>BloxSell | Offer</title>
		<link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="/assets/css/selling.css">
		<meta name="description" content="BloxSell. A Place to Sell Roblox Accounts">
  		<meta name="keywords" content="BloxSell, about, rbxflip, roblox, beaming, comping, roplace">
	</head>
	<body>
		<!--Navigate Bar-->
		<?php include("templates/navbar.php");?>

    
			<form class="inputs" action="com" method="post">
	<!--Form-->
  	<div class="login-box">
      <center>
        <h1 class="title">Offer for an Account</h1>
      </center>
        
        <div class="user-box">
          <input autocomplete="off" type="text" name="user" required>
          <label>🗒 &nbsp; Account Name</label>
        </div>
          <div class="user-box">
          <input autocomplete="off" type="text" name="discord" required>
          <label>🗒 &nbsp; Discord Username</label>
        </div>


        <div class="user-box">
          <input autocomplete="off" type="text" name="offer" required>
		      <label>💸 &nbsp; Offer</label>
        </div>
      </center>
        
        <select id="payment" name="paymentinfo" class="payment" placeholder="Select Payment Method" required>
          <option value="" disabled selected hidden>Payment Method</option>
					<option></option>
					<option value="Btc">Bitcoin</option>
					<option value="Eth">Ethereum</option>
	  				<option value="Paypal">Paypal</option>
					<option value="Card">Credit/Debit Card</option>
			  </select>
				<input class="submit" type="submit">
			</form>
		</div>
	</body>
</html>

