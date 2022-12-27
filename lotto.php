<html>
   <head>
    <title> Estrazioni del lotto </title>
   </head>
   <body>
      <table border ="1">
      <?php
        for ($ruota=1; $ruota<=12; $ruota++)
        {
         print ("<tr>");
         print ("<td> Ruota  $ruota </td>");
         for($n=1; $n<=5; $n++)
         {
          print ("<td>" . mt_rand(1,90) . "</td>");
          }
         print ("<tr>");
         }
    ?>
  </table>
 </body>
</html>