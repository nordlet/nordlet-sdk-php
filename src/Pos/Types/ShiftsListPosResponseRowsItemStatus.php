<?php

namespace Nordlet\Pos\Types;

enum ShiftsListPosResponseRowsItemStatus: string
{
    case Open = "open";
    case Closed = "closed";
}
