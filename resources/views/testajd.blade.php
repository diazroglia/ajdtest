<!DOCTYPE html>

<html>

<head>

</head>

<body>



<div class="container">

    <h1>Test AJD</h1>

    <?php
    //  $week=29;
    //  $year=2017;
      $date = \Carbon\Carbon::now();

      //$year = $date->year();
      //$date->setISODate($year,$week);
      echo "<br>";
      echo " Semana: ";
      echo $date->week();
      echo "<br>";
      echo " Semana: ";
      echo $date->week();
      echo "<br>";
      echo " Semana: ";
      echo $date->week();
      echo "<br>";

      echo " Semana: ";
      echo $date->week();
      echo " : ";
      echo $date->startOfWeek()->format('d-m-Y');
      echo " al ";
      echo $date->endOfWeek()->format('d-m-Y'); //Esto hace que pase de semana

      echo "<br>";
      echo $date->week();

      echo "<br>";
      echo $date->Week()-3;

      echo "<br> Año:";
      echo $date->year;

      echo "<br> endOfWeek():";
      echo $date->endOfWeek()->format('d-m-Y'); //Esto hace que pase de semana
      echo "<br> endOfWeek():";
      echo $date->endOfWeek()->format('d-m-Y'); //Esto hace que pase de semana
      echo "<br> endOfWeek():";
      echo $date->endOfWeek()->format('d-m-Y'); //Esto hace que pase de semana

      echo "<br>";
      echo $date->week();

      echo "<br>";
      echo $date->startOfWeek()->format('d-m-Y');

      echo "<br>";
      echo $date->week();

    ?>

</div>




</body>

</html>
