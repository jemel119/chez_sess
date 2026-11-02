
<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chez Session | Order Form</title>
</head>
<body>
   <h1>Chez Session</h1>
   <h2>Build Your Order</h2>

   <form action="process_order.php" method="post">
      <div>
         <label for="dessert">Dessert:</label>
         <select id="dessert" name="dessert">
            <option value="none">Choose a dessert</option>
            <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
            <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
            <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
            <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
         </select>
      </div>

      <div>
         <label for="drink">Drink:</label>
         <select id="drink" name="drink">
            <option value="none">Choose a drink</option>
            <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
            <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
            <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
            <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
            <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
         </select>
      </div>

      <fieldset>
         <legend>Drink Size:</legend>

         <label>
            <input type="radio" name="drinkSize" value="Small"
               <?= drinkSizeSelected("Small"); ?>>
            Small
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Medium"
               <?= drinkSizeSelected("Medium"); ?>>
            Medium
         </label>

         <label>
            <input type="radio" name="drinkSize" value="Large"
               <?= drinkSizeSelected("Large"); ?>>
            Large
         </label>
      </fieldset>

      <p>
         <button type="submit">Submit Order</button>
      </p>
   </form>

   <div class="insight-card">
      <h3>Live Guidance</h3>
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
   </div>

   <p>
      <a href="forget_order.php">Forget Order</a>
   </p>
</body>
</html>
