<?php
session_start();
#-------------------------------MODELS--------------------------------------
require_once"models/links.php";
require_once"models/login.php";
#-----------------------------CONTROLLERS-----------------------------------
require_once"controllers/template.php";
require_once"controllers/links.php";
require_once"controllers/login.php";

$template=new TemplateController();
$template->template();