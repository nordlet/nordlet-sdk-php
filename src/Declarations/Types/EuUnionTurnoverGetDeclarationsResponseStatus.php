<?php

namespace Nordlet\Declarations\Types;

enum EuUnionTurnoverGetDeclarationsResponseStatus: string
{
    case Below = "below";
    case Approaching = "approaching";
    case Exceeded = "exceeded";
    case NotApplicable = "not_applicable";
}
