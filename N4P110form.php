<html>
 <head>
  <title>Multipurpose Form</title>
  <style type="text/css">
  <!--
td {vertical-align: top;}
  -->
  </style>
 </head>
 <body>
  <form action="N4P111formprocess.php" method="post">
   <table>
    <tr>
     <td>Date</td>
     <td><input type="date" name="date"/></td>
    </tr>
    <tr>
      <td>Reviewer</td>
      <td><input type="text" name="reviewer"/></td>
      </tr>
    <tr>
      <td>Comments</td>
      <td><input type="text" name="comments"/></td>
    </tr>
    <tr>
     <td>Rating<br/></td>
     <td>
        <select name="rating">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
     </td>
    </tr>
   <tr>
     <td colspan="2" style="text-align: center;">
      <br>
      <input type="submit" name="submit" value="Add" />
     </td>
   </tr>
   </table>
  </form>
 </body>
</html>