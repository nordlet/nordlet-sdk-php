<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsPlIntrastatGenerateResponseFlow: string
{
    case Arrivals = "arrivals";
    case Dispatches = "dispatches";
}
