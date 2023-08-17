<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
    <?php

      $Tamil = 99;
      $English = 88;
      $Maths = 74;
      $Science = 96;
      $Social_Science = 94;

      echo "Tamil : $Tamil <br>";
      echo "Emglish : $English <br>";
      echo "Maths : $Maths <br>";
      echo "Science : $Science <br>";
      echo "Social Science : $Social_Science <br><br><br>";
      $Total = $Tamil+$English+$Maths+$Science+$Social_Science;
      echo "Total Marks : $Total<br><br><br>";
      $Average = $Tamil+$English+$Maths+$Science+$Social_Science/5;
      echo "Average by Total Marks : $Average<br><br>";

  

      if($Tamil>=35 && $English>=35 && $Maths>=35 && $Science>=35 && $Social_Science>=35)
      {
          echo "Pass <br>";
 
      }
      else
      {
        echo "Fail...";
      }


      echo "College new Joiners cutoff :"; 

      if($Average >=450)
          {
            echo "100% cutoff";
          }
          elseif($Average>=400)
          {
            echo "75% cutoff";
          }
          elseif($Average>=350)
          {
            echo "50% cutoff";
          }
          elseif($Average>=300)
          {
            echo "30% cutoff";
          }
          elseif($Average>=250)
          {
            echo "25% cutoff";
          }
          else
          {
            echo "No cutoff";
          }
      

    ?>


  
</body>
</html>