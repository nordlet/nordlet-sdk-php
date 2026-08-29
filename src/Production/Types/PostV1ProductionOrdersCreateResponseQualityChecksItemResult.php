<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionOrdersCreateResponseQualityChecksItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
