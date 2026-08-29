<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionQualityChecksRecordRequestResult: string
{
    case Passed = "passed";
    case Failed = "failed";
}
