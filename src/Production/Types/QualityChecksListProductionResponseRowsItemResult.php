<?php

namespace Nordlet\Production\Types;

enum QualityChecksListProductionResponseRowsItemResult: string
{
    case Pending = "pending";
    case Passed = "passed";
    case Failed = "failed";
}
