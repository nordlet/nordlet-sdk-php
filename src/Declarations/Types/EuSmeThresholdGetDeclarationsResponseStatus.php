<?php

namespace Nordlet\Declarations\Types;

enum EuSmeThresholdGetDeclarationsResponseStatus: string
{
    case NotApplicable = "not_applicable";
    case Below = "below";
    case Approaching = "approaching";
    case Exceeded = "exceeded";
    case Unknown = "unknown";
}
