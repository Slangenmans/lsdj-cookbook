<?php

namespace App\Enums;

enum DistortionEnum: string
{
    case clip = 'clip';
    case fold = 'fold';
    case wrap = 'wrap';
}
