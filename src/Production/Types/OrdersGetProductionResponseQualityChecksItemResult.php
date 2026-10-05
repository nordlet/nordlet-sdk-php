<?php

namespace Nordlet\Production\Types;

enum OrdersGetProductionResponseQualityChecksItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
