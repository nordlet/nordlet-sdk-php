<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsLtIntrastatComputeRequestFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
