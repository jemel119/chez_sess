<option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
<option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
<input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>>

<div class="insight-card">
   <h3>Live guidance</h3>
   <p><?= htmlspecialchars(completionMessage()); ?></p>
   <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
</div>

<div class="insight-card pricing-grid">
   <div>
      <h3>Estimated total</h3>
      <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
   </div>
   <div>
      <h3>Order profile</h3>
      <p><?= htmlspecialchars(orderProfile()); ?></p>
   </div>
</div>