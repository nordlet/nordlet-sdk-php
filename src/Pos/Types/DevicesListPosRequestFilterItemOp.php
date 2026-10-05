<?php

namespace Nordlet\Pos\Types;

enum DevicesListPosRequestFilterItemOp: string
{
    case Eq = "eq";
    case Ne = "ne";
    case Contains = "contains";
    case Gte = "gte";
    case Lte = "lte";
    case In = "in";
}
