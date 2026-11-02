
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

function sessionValue(string $key): string {
   return $_SESSION[$key] ?? '(not selected)';
}

function completedChoiceCount(): int {
   $count = 0;

   foreach (['dessert', 'drink', 'drinkSize'] as $key) {
      if (sessionValue($key) !== '(not selected)') {
         $count++;
      }
   }

   return $count;
}

function completionMessage(): string {
   $count = completedChoiceCount();

   if ($count === 3) {
      return 'Your order is complete and ready to submit.';
   }

   if ($count === 0) {
      return 'Start by choosing a dessert, a drink, and a size.';
   }

   return "You have completed {$count} of 3 order choices.";
}

function dessertSelected($dessert): string {
   return ($_SESSION['dessert'] ?? '') === $dessert
      ? 'selected'
      : '';
}

function drinkSelected($drink): string {
   return ($_SESSION['drink'] ?? '') === $drink
      ? 'selected'
      : '';
}

function drinkSizeSelected($size): string {
   return ($_SESSION['drinkSize'] ?? '') === $size
      ? 'checked'
      : '';
}
