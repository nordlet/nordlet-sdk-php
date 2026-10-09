<?php

namespace Nordlet\Pos\Types;

enum ShiftsGetPosResponseStatus: string
{
    case Open = "open";
    case Closed = "closed";
}
