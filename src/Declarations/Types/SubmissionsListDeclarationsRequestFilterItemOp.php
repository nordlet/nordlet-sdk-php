<?php

namespace Nordlet\Declarations\Types;

enum SubmissionsListDeclarationsRequestFilterItemOp: string
{
    case Eq = "eq";
    case Ne = "ne";
    case Contains = "contains";
    case Gte = "gte";
    case Lte = "lte";
    case In = "in";
}
