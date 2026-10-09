<?php

namespace Nordlet\Pos\Types;

enum ShiftsClosePosResponseStatus: string
{
    case Open = "open";
    case Closed = "closed";
}
