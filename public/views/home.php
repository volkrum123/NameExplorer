<?php 
 $alfabet = ["A","B","C","D","E","F","G",
             "H","I","J","K","L","M","N",
             "O","P","Q","R","S","T","U",
             "V","W","X","Y","Z"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Name Explorer</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .alphabet-btn {
      width: 40px;      /* optional fixed width */
      height: 40px;     /* optional fixed height */
      padding: 0;
      text-align: center;
      border: 1px solid #ccc; /* gray border */
    }
  </style>
</head>

<body class="bg-light">

<?php 
require __DIR__ . '/../inc/header.php';
?>

<body>
  <div class="container mt-4">
    <h2 class="mb-3 row justify-content-center">Alphabet Buttons</h2>
    <div class="d-flex flex-wrap">
      <?php foreach($alfabet as $l): ?>
         <button class="btn bg-white text-dark alphabet-btn me-2 mb-2 letter" data-letter="<?= $l ?>"><?php echo $l?></button>
      <?php endforeach;?>
    </div>
  </div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="results" class="mt-4">
                
            </div>
        </div>
    </div>
</div>

<script src="assets/js/app.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>