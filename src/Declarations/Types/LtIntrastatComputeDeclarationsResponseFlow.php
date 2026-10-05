<?php

namespace Nordlet\Declarations\Types;

enum LtIntrastatComputeDeclarationsResponseFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
