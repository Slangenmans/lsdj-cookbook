<?php

namespace App\Enums;

enum PhaseEnum: string
{
    case pinch = 'pinch';
    case wrap =  'wrap';
    case resync = 'resync';
    case resync2 = 'resync2';
}
