<!DOCTYPE html>
<html>
  <head>
    <title>Mutliplication</title>
    <link rel="stylesheet" href="tableau.css">
  </head>
  <body>
    <table  border='2'>
      <tr>
        <th>*</th>
        <?php
          for($i=2; $i<10 ; $i++){
            echo "<th> $i </th>";
          }
         ?>
      </tr>
      <?php
      for($i=2;$i<10;$i++){
        if($i%2==0 ){
          echo "<tr class='pair'>";
        }else{
          echo "<tr class='impair'>";
        }
        echo "<th> $i </th>";
        for($j=2;$j<10;$j++){
          if($i==$j){
            echo "<td ><b>".$i*$j."</b></td>";
          }
          else{
            echo "<td>".$i*$j."</td>";
          }
        }
        echo "</tr>";
      }
       ?>

    </table>

  </body>
</html>
