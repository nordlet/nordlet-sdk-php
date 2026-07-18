<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsEuSmeThresholdGetResponseIntraEuStatus: string
{
    case Below = "below";
    case Approaching = "approaching";
    case Exceeded = "exceeded";
}
