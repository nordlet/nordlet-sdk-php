<?php

namespace Nordlet\Pos\Types;

enum ShiftsOpenPosResponseStatus: string
{
    case Open = "open";
    case Closed = "closed";
}
