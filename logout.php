<?php

require_once 'core/init.php';

logout();

$logoutSuccess = logout();

if ($logoutSuccess) :
  header('LOCATION: admin.php');
else :
  header('LOCATION: adminindex.php');
endif;
