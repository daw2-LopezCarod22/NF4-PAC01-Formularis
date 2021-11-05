<html>
 <head>
  <title>Ejercicio2</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
  <form action="#" method="post">
   <table>
     <td>Selecciona una opcion<br/></td>
     <td>
      <select name="Opciones">
       <option value="">Selecciona una opcion</option>
       <option value="<?php echo $_POST['opcion1']; ?>"><?php echo $_POST['opcion1']; ?></option>
       <option value="<?php echo $_POST['opcion2']; ?>"><?php echo $_POST['opcion2']; ?></option>
       <option value="<?php echo $_POST['opcion3']; ?>"><?php echo $_POST['opcion3']; ?></option>
       <option value="<?php echo $_POST['opcion4']; ?>"><?php echo $_POST['opcion4']; ?></option>
       <option value="<?php echo $_POST['opcion5']; ?>"><?php echo $_POST['opcion5']; ?></option>
      </select>
     </td>
    </tr>
    </tr>
   </table>
  </form>
 </body>
</html>
