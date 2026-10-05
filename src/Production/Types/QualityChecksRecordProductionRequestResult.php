<?php

namespace Nordlet\Production\Types;

enum QualityChecksRecordProductionRequestResult: string
{
    case Passed = "passed";
    case Failed = "failed";
}
