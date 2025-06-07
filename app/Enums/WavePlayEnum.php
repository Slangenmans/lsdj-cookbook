<?php

namespace App\Enums;

enum WavePlayEnum: string
{
    case manual = 'manual';
    case once = 'once';
    case loop = 'loop';
    case pingpong = 'pingpong';
    case resync = 'resync';
}
