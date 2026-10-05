<?php

namespace Nordlet\Production\Types;

enum OrdersCreateProductionResponseQualityChecksItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
