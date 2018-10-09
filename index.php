<!DOCTYPE html>
<!-- index.php -->
<html>
  <head>
   <meta charset="UTF-8">
  </head>
  <body>
    <!-- Static bolon dynamic aguulgiin ylgaa -->
    <p> Ene bol static aguulga ym.</p>
    
    <?php echo "PHP scripteer, programiin kodoor uusgesen dynamic aguulga."; ?>
    <p>Web server time:
       <span><?php 
              // Sistemiin tsagiig HTTP garaltad bichih
              echo "Today is " . date("Y/m/d");
             ?></span>
    <p>
  </body>
</html>