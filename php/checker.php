<?php

$isString = is_string($_GET["number"]);

$number = $_GET["number"];


if ($number % 2 == 0) {
    echo "<h2>$number is an Even Number!</h2>";
} else {
    echo "<h2>$number is an Odd Number!</h2>";
}
