<?php

namespace Nordlet\Consolidation\Types;

enum PostV1ConsolidationReportResponseCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
