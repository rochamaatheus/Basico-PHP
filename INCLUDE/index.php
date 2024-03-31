<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  <?php 
    // include() = Copies the content of a file (php/html/text)
    //             and includes it in your php file.
    //             Sections of our website become reusable
    //             Changes only need to be made in one place

    include('./includes/header.html');
    echo"<p>This is the home page.</p>";
    include('./includes/footer.html');
  ?>
</body>
</html>