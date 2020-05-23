<?php

setcookie('micookie', '', time() -100);

setcookie('oneyear', '', time() -100);


header('Location:view-cookies.php');