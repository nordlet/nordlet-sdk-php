<?php

namespace Nordlet\Declarations\Types;

enum LtIntrastatComputeDeclarationsRequestFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
