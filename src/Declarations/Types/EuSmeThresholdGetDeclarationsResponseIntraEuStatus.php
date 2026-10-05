<?php

namespace Nordlet\Declarations\Types;

enum EuSmeThresholdGetDeclarationsResponseIntraEuStatus: string
{
    case Below = "below";
    case Approaching = "approaching";
    case Exceeded = "exceeded";
}
