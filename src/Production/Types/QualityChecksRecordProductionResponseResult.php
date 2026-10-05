<?php

namespace Nordlet\Production\Types;

enum QualityChecksRecordProductionResponseResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
