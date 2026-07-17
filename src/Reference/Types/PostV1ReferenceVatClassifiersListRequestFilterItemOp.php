<?php

namespace Nordlet\Reference\Types;

enum PostV1ReferenceVatClassifiersListRequestFilterItemOp: string
{
    case Eq = "eq";
    case Ne = "ne";
    case Contains = "contains";
    case Gte = "gte";
    case Lte = "lte";
    case In = "in";
}
