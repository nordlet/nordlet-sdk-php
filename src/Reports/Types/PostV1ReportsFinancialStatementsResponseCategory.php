<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsFinancialStatementsResponseCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
