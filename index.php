<?php
use function Functions\Generate\generatePassword;
use function Functions\Parse\parseUserInput;

require_once ("functions/generate.php");
require_once ("functions/parse.php");

$input = readline("Enter:");

$parsed = parseUserInput($input);

$password = generatePassword(...$parsed);

print_r($password);