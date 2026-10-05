<?php

namespace Nordlet\Consolidation\Types;

enum ReportConsolidationResponseCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
