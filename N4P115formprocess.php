<html>
<head>
 <title>Ejercicio3</title>
</head>
<body>
 <script>
  var numero1 = <?php echo $_POST['numero1']; ?>;
  var numero2 = <?php echo $_POST['numero2']; ?>;
  var numero3 = <?php echo $_POST['numero3']; ?>;

  var suma = numero1 + numero2 + numero3;
  document.writeln(numero1 + "+" + numero2 + "+" + numero3 + "=");
  document.writeln(suma);
 </script>
</body>
</html>