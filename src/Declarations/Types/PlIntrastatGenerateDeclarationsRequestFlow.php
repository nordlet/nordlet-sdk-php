<?php

namespace Nordlet\Declarations\Types;

enum PlIntrastatGenerateDeclarationsRequestFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
