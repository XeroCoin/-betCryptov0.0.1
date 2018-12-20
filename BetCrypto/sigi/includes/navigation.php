<?php if(isset($_SESSION['userId'])){
  echo '<div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a class="welcomesign" href="/Betcrypto/sigi/index.php">
                      Bet Crypto
                  </a>
              </li>
              <li>
                  <a href="/Betcrypto/sigi/index.php">Home</a>
              </li>
              <li>
                  <a href="/Betcrypto/sigi/activebets.html">Bets</a>
              </li>
              <li>
                  <a href="/Betcrypto/sigi/accountinfo.html">Account</a>
              </li>
              <li>
                  <a href="/Betcrypto/sigi/settings.html">Settings</a>
              </li>
          </ul>
      </div>
      <div id="page-content-wrapper">
          <button type="button" class="btn btn-dark" href="#menu-toggle" id="menu-toggle">
              <h6>Menu </h6><span class="far fa-caret-square-right"></span>
          </button>
      </div>



  <div class="loginspace">

    <form action="/Betcrypto/sigi/includes/logout.inc.php" method="post">
    <button class="btn btn-danger" type="submit" name="logout">Logout</button>
    </form>

</div>';
}
else{
  echo ' <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bet Crypto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Contact</a>
      </li>
    </ul>

  </div>
</nav>';

}
?>
