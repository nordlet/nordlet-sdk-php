<?php

namespace Nordlet\Sales\Types;

enum RecognitionModifySalesRequestApproach: string
{
    case Prospective = "prospective";
    case CumulativeCatchUp = "cumulative_catch_up";
}
