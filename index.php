<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Card Indi</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<?php function writeSecretSentence(string $animal, string $element) : string {
        return 'Le'.' '.$animal.' '.'s\'incline face à '. ' '.$element;}?>


<div class="container">
<div class="card " style="max-width: 18rem;">
<img src="http://images.innoveduc.fr/indi-torch.gif" class="p-1 img-fluid card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Mystery sentence : </h5>
    <p class="card-text">
    
     <?= writeSecretSentence('singe', 'l\'air'); ?></p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>