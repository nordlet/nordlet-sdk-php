<?php

namespace Nordlet\Declarations\Types;

enum PlIntrastatGenerateDeclarationsResponseFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
