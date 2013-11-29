<?php 

if (!((isset($display_parameter)) and (isset($template_parameter)))){
  echo "Debugging... parameter not found\n"; die();
  exit;
  //on production this if statement must be remove.
}

require_once("Twig/Autoloader.php");
Twig_Autoloader::register();

$templateDir=".";
$loader = new Twig_Loader_Filesystem($templateDir);
$twig = new Twig_Environment($loader);

$template = $twig->loadTemplate($template_parameter);
$template->display($display_parameter);

?>