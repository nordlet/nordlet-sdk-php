<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsPlIntrastatGenerateRequestFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
