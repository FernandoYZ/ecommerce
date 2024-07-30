<?php
array(
      "amount" => $_POST['precio'],
      "capture" => true,
      "currency_code" => "PEN",
      "description" => $_POST['array_product'],
      "email" => $_POST['email'],
      "source_id" => $_POST['token']
    )

?>