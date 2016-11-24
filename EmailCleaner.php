<?php
namespace freegle\EmailCleaner;

function cleanEmail($email)
{
    $trimmed = trim($email);
    $lower_case = strtolower($trimmed);
    return $lower_case;
}


