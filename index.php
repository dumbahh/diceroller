<?php include 'dice.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="#" method="post">
      <input type="text" name="ofdice" placeholder="How many dice do you want to roll?...">
      <select name="sides">
        <option value="4">D4</option>
        <option value="6">D6</option>
        <option value="8">D8</option>
        <option value="10">D10</option>
        <option value="12">D12</option>
        <option value="20">D20</option>
      </select>
      <button type="submit" name="submit">Submit</button>
    </form>

     <?php if (isset($_POST['submit'])) { ?>
      <?php
       $num = $_POST['ofdice'];
       $intnum = (int)$num;
       $objnum = (object)$intnum;
       $type = (int)$_POST['sides'];
        ?>
       <div id="result">
       <h4>Number of dice rolled: <?php echo $num; ?></h4><br>
       <h4>Type of dice: <?php echo $type; ?></h4><br>
       <h4>
         <?php
         while ($num > 0) {
           foreach ($objnum as $h) {
             $dice = new dice;
             $roll = $dice->roll($type);
             echo $roll . "<br>";
           }
           $num--;
         }

         ?>
      </h4>
    </div>
  <?php } ?>
  </body>
</html>
