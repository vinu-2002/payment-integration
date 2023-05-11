
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>PAYMENT GATEWAY INTEGRATION PROJECT AT SPARKS FOUNDATION <br> #TASK2</h1><hr>
	<h1 align="center" style="color:blue">Children Donation Welfare </h1>
	
	<img src="c.jpg" alt="" width="600px" />
<center>

<img src="d.jpg" alt="" width="300px" />
</center>
	
</body>
</html>
<?php
require('config.php');
?>
<form align="center" action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="10000"
		data-name="vinayak h"
		data-description="intern at sparks foundation"
		data-image="v.jpg"
		data-currency="inr"
		data-email="vinu.10allu@gmail.com"
	>
	</script>

</form>