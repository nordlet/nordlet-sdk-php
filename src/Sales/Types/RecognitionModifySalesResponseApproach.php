<?php

namespace Nordlet\Sales\Types;

enum RecognitionModifySalesResponseApproach: string
{
    case Prospective = "prospective";
    case CumulativeCatchUp = "cumulative_catch_up";
}
