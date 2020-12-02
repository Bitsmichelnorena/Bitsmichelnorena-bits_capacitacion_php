<!DOCTYPE html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <center>
      <h1>LISTA PELICULAS</h1>
      <?php
      #creacion e ingreso de datos

      $pelicula1["datos"]["identificador"] = "1";
      $pelicula1["datos"]["titulo"] = "el joven manos de tijeras";
      $pelicula1["datos"]["director"] = "jhonny depp";
      $pelicula1["datos"]["año"] = "1996";
      $pelicula1["datos"]["duracion"] = "1 hora";

      $pelicula2["datos"]["identificador"] = "2";
      $pelicula2["datos"]["titulo"] = "luna";
      $pelicula2["datos"]["director"] = "jhonny depp";
      $pelicula2["datos"]["año"] = "1996";
      $pelicula2["datos"]["duracion"] = "3 horas";


      $keys = array_keys($pelicula1["datos"]);
      $keys = array_keys($pelicula2["datos"]);

      $table = "<table border=\"1\">";
      $table .= "<tr>";

      foreach ($keys as $i) {
         $table .= "<th>" . $i . "</th>";
      }
      $table .= "</tr>";

      foreach ($keys as $i) {
         $table .= "<td>" . $pelicula1["datos"]["${i}"] . "</td>";
      }
      $table .= "<tr>";
      foreach ($keys as $i) {
         $table .= "<td>" . $pelicula2["datos"]["${i}"] . "</td>";
      }
      $table .= "</tr>";

      $table .= "</table>";
      echo $table;
      ?>
   </center>
</body>

</html>