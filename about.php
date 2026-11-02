
<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chez Session | About</title>
   <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h1>Chez Session</h1>
   <h2>How Our Ordering System Works</h2>

   <div class="insight-card">
      <h3>About Chez Session</h3>
      <p>
         Chez Session is a PHP-based bistro ordering application.
         Customers can choose a dessert, a drink, and a drink size.
         The application remembers their choices between pages
         using PHP sessions.
      </p>
   </div>

   <div class="insight-card">
      <h3>The Order Process</h3>

      <ol>
         <li>
            <strong>Build an order:</strong>
            The customer selects a dessert, drink, and size
            on index.php.
         </li>

         <li>
            <strong>Submit the form:</strong>
            The browser sends the selected values to
            process_order.php using the POST method.
         </li>

         <li>
            <strong>Save the order:</strong>
            The order() function in order_functions.php
            stores the submitted values in $_SESSION.
         </li>

         <li>
            <strong>Display the receipt:</strong>
            The receipt shows the saved choices, estimated
            total, order profile, and pairing suggestion.
         </li>

         <li>
            <strong>Order again:</strong>
            Returning to index.php restores the saved
            dropdown and radio button selections.
         </li>

         <li>
            <strong>Forget the order:</strong>
            forget_order.php clears the order session
            and redirects the customer to a fresh form.
         </li>
      </ol>
   </div>

   <div class="insight-card">
      <h3>Why PHP Sessions?</h3>
      <p>
         HTTP requests are independent, so the server needs
         a way to recognize an ongoing ordering session.
         PHP sessions allow the application to preserve
         order selections across multiple page requests.
      </p>

      <p>
         The order information is stored in the server-side
         session. A session identifier allows the browser
         to continue using the same session when navigating
         between pages.
      </p>
   </div>

   <div class="insight-card">
      <h3>Sessions and Cookies</h3>
      <p>
         PHP sessions store the customer's dessert, drink,
         and drink size on the server.
      </p>

      <p>
         Chez Session also uses a separate lastVisit cookie
         to remember the timestamp of the customer's most
         recent order submission.
      </p>

      <p>
         Forgetting an order clears the session data,
         but the lastVisit cookie remains available
         for the returning-guest greeting.
      </p>
   </div>

   <div class="insight-card">
      <h3>Additional Features</h3>
      <p>
         The application includes completion feedback,
         dessert-and-drink pairing suggestions, estimated
         pricing, and an order profile based on the total.
      </p>

      <p>
         These features use reusable functions in
         order_functions.php to keep the application
         organized and maintainable.
      </p>
   </div>

   <p>
      <a href="index.php">Back to Order Form</a>
   </p>
</body>
</html>
