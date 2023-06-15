<?php
   if(isset($_POST['field']))
   die(var_dump($_POST))
   ?>
   <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{asset('css/style1.css')}}"/>
  <style>
    .container {
      display: flex;
      align-items: center;
      margin-bottom: 10px; /* Ajoute une marge en bas pour l'espace entre les containers */
    }

    .container p {
      margin-right: 10px; /* Ajoute une marge à droite du texte pour l'espace */
    }

    .image-centered {
      margin-right: 10px; /* Ajoute une marge à droite de l'image pour l'espace */
    }
  </style>
</head>
<body>
  <div class="container">
    <img src="/storage/products/img/1.jpg" alt="Description de l'image" class="image-centered">
    <p>
      <form action="post" method="{{ route('payments.store') }}">
        <input type="hidden" name="field" value="test">
        <script
        src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
        data-public-key="pk_live_uuOF1TZTzbjOcwRqRSv5Zep3"
        data-button-text="Payer"
        data-button-class="button-class"
        data-transaction-amount="3000"
        data-transaction-description="Description de la transaction"
        data-currency-iso="XOF">
        </script>
      </form>
    </p>
    <div class="container">
  <p><h1> VEUILLEZ CONTINUER VOTRE PAIEMENT! MERCI</p>
</div>

  </div>
  <!-- <div class="container">
    <p>
      
    </p>
    <p>Votre deuxième texte va ici.</p>
  </div> -->
</body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{asset('css/style1.css')}}"/>
  
</head>
<body>
  <div class="container">
    <img src="/storage/products/img/1.jpg" alt="Description de l'image" class="image-centered">
  </div>
  <div class="container">
    <p>
      <form action="post" method="{{ route('payments.store') }}">
        <input type="hidden" name="field" value="test">
        <script
        src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
        data-public-key="pk_live_uuOF1TZTzbjOcwRqRSv5Zep3"
        data-button-text="Payer"
        data-button-class="button-class"
        data-transaction-amount="3000"
        data-transaction-description="Description de la transaction"
        data-currency-iso="XOF">
        </script>
      </form>
    </p>
  
  </div> -->
 
  

      
</body>
</html>