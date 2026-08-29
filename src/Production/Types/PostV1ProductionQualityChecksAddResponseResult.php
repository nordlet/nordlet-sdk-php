<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionQualityChecksAddResponseResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
