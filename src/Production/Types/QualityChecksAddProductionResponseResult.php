<?php

namespace Nordlet\Production\Types;

enum QualityChecksAddProductionResponseResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
