<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionQualityChecksRecordResponseResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
