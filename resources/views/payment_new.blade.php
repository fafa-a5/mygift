<?php
   if(isset($_POST['field']))
   die(var_dump($_POST))
   ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script>
  </head>
  <body>
    <form action="post" method="{{ route('payments.store') }}">
      <input type="hidden" name="field" value="test">
      <script
        src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
        data-public-key="pk_live_uuOF1TZTzbjOcwRqRSv5Zep3"
        data-button-text="Payer"
        data-button-class="button-class"
        data-transaction-amount="1000"
        data-transaction-description="Description de la transaction"
        data-currency-iso="XOF">
      </script>
    </form>
  </body>
</html>