<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsLtIntrastatComputeResponseFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
