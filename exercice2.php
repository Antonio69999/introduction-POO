<?php 

require_once("./utilis/loadClass.php");

$doggy = new Doggy("fien", "blanc");
echo $doggy->getBreed();
echo $doggy->getcolor();


