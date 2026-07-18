<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesRecognitionModifyRequestApproach: string
{
    case Prospective = "prospective";
    case CumulativeCatchUp = "cumulative_catch_up";
}
