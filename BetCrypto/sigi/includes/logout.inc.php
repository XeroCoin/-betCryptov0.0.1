<?php
session_start();
session_unset();
session_destroy();
header('Location: /Betcrypto/sigi/index.php');
