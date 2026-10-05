<?php

namespace Nordlet\Declarations\Types;

enum LtGpm312ComputeDeclarationsResponsePayoutTiming: string
{
    case SameMonth = "same-month";
    case NextMonth = "next-month";
}
