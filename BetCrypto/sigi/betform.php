<?php
  $page_title = 'Bet Form';
  include 'includes/header.php';
 ?>

<body>

  <?php
  include 'includes/navigation.php';

   ?>

        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->

        <div class="jumbotron" id="form">
        <h1 class="text-center">Confirm Bet</h1>
        <hr>
            <form>
            <div class="form-group">
              <ul id="betForm">

              </ul>
              <ul>Bet Amount:</ul>
              <ul><input id="betAmount" type="number"></ul>
            </div>
            <button class="btn btn-primary" id="confirm" type="button">
            Confirm Bet
            </button>
            </form>
            <form id="recordform" name="recform" type="post" method="post" action="../sigi/includes/recordBet.inc.php">
            </form>


        </div>

         <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

    <!-- Temp Login JS -->

    <script src="scripts/submitBet.js"></script>


</body>

</html>
