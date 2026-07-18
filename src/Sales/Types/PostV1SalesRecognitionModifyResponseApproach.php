<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesRecognitionModifyResponseApproach: string
{
    case Prospective = "prospective";
    case CumulativeCatchUp = "cumulative_catch_up";
}
