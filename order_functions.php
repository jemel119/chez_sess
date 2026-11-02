
<?php

session_start();

function order(): string {
   $dessert = trim($_POST['dessert'] ?? 'none');
   $drink = trim($_POST['drink'] ?? 'none');
   $drinkSize = trim($_POST['drinkSize'] ?? '');

   $_SESSION['dessert'] = $dessert !== '' && $dessert !== 'none'
      ? $dessert
      : '(not selected)';
   $_SESSION['drink'] = $drink !== '' && $drink !== 'none'
      ? $drink
      : '(not selected)';
   $_SESSION['drinkSize'] = $drinkSize !== ''
      ? $drinkSize
      : '(not selected)';

   return "Dessert: {$_SESSION['dessert']}<br>"
      . "Drink: {$_SESSION['drink']}<br>"
      . "Drink size: {$_SESSION['drinkSize']}";
}
