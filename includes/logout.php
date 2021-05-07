<?php

session_start();
session_unset();
session_destroy();

header('location:'.SITEURL.'index.php?page=login');
exit();