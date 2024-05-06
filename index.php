<?php

  require_once __DIR__ . '/Model/Animal_shop.php';
  require_once __DIR__ . '/Model/partials/Cat.php';
  require_once __DIR__ . '/Model/partials/Dog.php';
  require_once __DIR__ . '/Data/db.php';

  var_dump($AnimalShop);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- fontawesome -->

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.css' integrity='sha512-U9Y1sGB3sLIpZm3ePcrKbXVhXlnQNcuwGQJ2WjPjnp6XHqVTdgIlbaDzJXJIAuCTp3y22t+nhI4B88F/5ldjFA==' crossorigin='anonymous'/>

    <!-- css -->

    <link rel="stylesheet" href="./style/main.css">

  <title>OOP 2</title>
</head>
<body>

  <div>

    <div class="container d-flex justify-contetnt-between">

      <?php foreach($db as $item): ?>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <img class="w-50" src="<?php echo $item-> getImg() ?>" alt="<?php echo $item->getName() ?>">
          <h5 class="card-title"><?php echo $item->getName() ?></h5>
          <p class="card-text"> <?php echo $item-> getPrice()?></p>
          <p class="card-text"> <?php echo $item-> getMedaglietta()?></p>
          <p class="card-text"> <?php echo $item-> getHair()?></p>
        </div>
      </div>

      <?php endforeach; ?>

    </div>
  </div>
  
</body>
</html>