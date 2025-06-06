<?php
namespace App\Enums;

enum TableModeEnum: string {
    case TICK = 'TICK';
    case STEP = 'STEP';
    case NULL = null;
}
