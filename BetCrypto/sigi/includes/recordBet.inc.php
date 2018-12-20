<html>
<body>
<script type="text/javascript">
  var bet = localStorage.getItem('whichBet')
  console.log(bet);
</script>
</body>

<?php
echo '<script type="text/javascript">document.writeln(bet)</script>';
require 'dbh.inc.php';

?>
</html>
