<?php

namespace App\Enums;

enum FilterEnum: string
{
    case lowp = 'lowp';
    case highp = 'highp';
    case bandp = 'bandp';
    case allp = 'allp';
}
