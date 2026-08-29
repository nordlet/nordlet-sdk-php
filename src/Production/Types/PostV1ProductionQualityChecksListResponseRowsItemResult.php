<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionQualityChecksListResponseRowsItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
