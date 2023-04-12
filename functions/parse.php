<?php

namespace Functions\Parse;

function parseUserInput(string $input): array
{


    $parsed = explode(" ", $input);

    return $parsed;
}