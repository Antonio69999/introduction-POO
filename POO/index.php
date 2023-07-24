<?php

require_once('utils/loadClass.php');
require_once('utils/db_connect.php');


$catRepo = new CatRepository($bdd);

var_dump($catRepo->findAllCats());

