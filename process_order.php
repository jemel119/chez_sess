
<?php
require "./order_functions.php";
$orderSummary = order();

// Runs at the very top of process_order.php, alongside session_start().
// One day = 86400 seconds. One week = 604800.
$visitStamp = date('l, F j, Y g:i a');
setcookie('lastVisit', $visitStamp, time() + 86400, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chez Session | Order Receipt</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Chez Session</h1>
   <h2>Your Order Receipt</h2>

   <div class="receipt-card">
      <?= $orderSummary; ?>
   </div>

   <div class="insight-card">
      <h3>Order Feedback</h3>
      <p><?= htmlspecialchars(completionMessage()); ?></p>
      <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
   </div>

   <div class="insight-card pricing-grid">
      <div>
         <h3>Estimated Total</h3>
         <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
      </div>

      <div>
         <h3>Order Profile</h3>
         <p><?= htmlspecialchars(orderProfile()); ?></p>
      </div>

      <p class="insight-note full-width-note">
         <?= htmlspecialchars(pricingNote()); ?>
      </p>
   </div>

   <p>
      <a href="index.php">Order Again!</a>
   </p>

   <p>
      <a href="forget_order.php">Forget Order</a>
   </p>
</body>
</html>
