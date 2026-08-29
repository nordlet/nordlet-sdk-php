<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersGetResponseQualityChecksItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
