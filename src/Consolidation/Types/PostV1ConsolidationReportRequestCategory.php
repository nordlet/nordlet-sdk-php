<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationReportRequestCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
