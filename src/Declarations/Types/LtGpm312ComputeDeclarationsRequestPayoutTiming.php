<?php

namespace Nordlet\Declarations\Types;

enum LtGpm312ComputeDeclarationsRequestPayoutTiming: string
{
    case SameMonth = "same-month";
    case NextMonth = "next-month";
}
