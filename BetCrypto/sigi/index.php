<?php
  $page_title = 'BetCrypto';
  include 'includes/header.php';
 ?>
<body>

    <?php
    include 'includes/navigation.php';

     ?>


        <!-- /#sidebar-wrapper -->
<?php
if(isset($_SESSION['userId'])){
  echo '<div class="main-content">
    <div id="findMe" class="jumbotron">
      <h1 class="text-center page-header">On Deck Tonight</h1>
      <hr><div class="bets text-center">
        <div class="over" name="o1">
          <a href="betform.php">
        <button type="button" id="over1" onclick="record(this)" class="btn btn-primary over">Over</button>
            </a>
        </div>
          <h6 id="bet1" class="line">Houston Rockets by more that 10 over the Golden State Warriors</h6>
          <div class="under" name="u1">
              <a href="betform.php">
          <button type="button" id="under1" onclick="record(this)" class="btn btn-primary under">Under</button>
              </a>
          </div>

          <div class="over" name="o2">
              <a href="betform.php">
          <button type="button" id="over2" onclick="record(this)" class="btn btn-primary over">Over</button>
              </a>
          </div>
          <h6 id="bet2" class="line" name="b1">Ninja with 50 kills through 3 rounds of FortNite</h6>
          <div class="under" name="u2">
              <a href="betform.php">
          <button type="button" id="under2" onclick="record(this)" class="btn btn-primary under">Under</button>
              </a>
          </div>
          <div class="over" name="o3">
              <a href="betform.php">
          <button type="button" id="over3" onclick="record(this)"  class="btn btn-primary over">Over</button>
              </a>
          </div>
          <h6 id="bet3" class="line">FC sig .500 over 5 games of FIFA online.</h6>
                  <div class="under" name="u3">
              <a href="betform.php">
          <button type="button" id="under3"  onclick="record(this)" class="btn btn-primary">Under</button>
              </a>
          </div>
      </div>
          <hr>
          <div>
          <button class="switchaccounts">Switch Accounts</button>
          </div>
      </div>
  </div>
</div>
  <!-- /#page-content-wrapper -->

<!-- /#wrapper -->

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

<script src="scripts/submitBet.js"></script>';
}
else{
  echo '<div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5">Please Login</h1>
          <p class="lead">Or <a href="register.php">Sign Up</a> now to enjoy Bet Crypto</p>
          <ul class="list-unstyled">
            <li>BetCrypto &copy;</li>
            <li>poop</li>
          </ul>
        </div>
      </div>
    </div>';
}
 ?>
        <!-- Page Content -->



</body>

</html>
