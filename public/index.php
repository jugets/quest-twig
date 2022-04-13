<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';
$links = ['Home','Products'];

echo $twig->render('home.html.twig', ['name' => $name]);
echo $twig->render('layout.html.twig', ['links' => $links]);