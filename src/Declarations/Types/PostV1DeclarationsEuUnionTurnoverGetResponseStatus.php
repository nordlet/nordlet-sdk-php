<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsEuUnionTurnoverGetResponseStatus: string
{
    case Below = "below";
    case Approaching = "approaching";
    case Exceeded = "exceeded";
    case NotApplicable = "not_applicable";
}
