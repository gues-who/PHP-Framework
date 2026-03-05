<?php

header('Content-Type: text/html; charset=utf-8');

$name = isset($_GET['name']) ? htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8') : 'World';

printf("Hello, %s!", $name);
