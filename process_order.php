
<?php
require "./order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chez Session | Order Receipt</title>
</head>
<body>
   <h1>Chez Session</h1>
   <h2>Your Order Receipt</h2>

   <div class="receipt-card">
      <?= $orderSummary; ?>
   </div>

   <p>
      <a href="index.php">Order Again!</a>
   </p>

   <p>
      <a href="forget_order.php">Forget Order</a>
   </p>
</body>
</html>
