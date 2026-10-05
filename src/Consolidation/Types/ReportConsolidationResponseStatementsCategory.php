<?php

namespace Nordlet\Consolidation\Types;

enum ReportConsolidationResponseStatementsCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
