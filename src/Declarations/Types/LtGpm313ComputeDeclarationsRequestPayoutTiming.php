<?php

namespace Nordlet\Declarations\Types;

enum LtGpm313ComputeDeclarationsRequestPayoutTiming: string
{
    case SameMonth = "same-month";
    case NextMonth = "next-month";
}
