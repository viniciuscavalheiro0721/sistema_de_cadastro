<?php
header("Content-Type: text/html; charset=utf-8");
include("config/config.php");
include(DIRREQ."helpers/variables.php");
include(DIRREQ."lib/vendor/autoload.php");

$dispatch = new Classes\ClassDispatch();
include($dispatch->getInclusao());
