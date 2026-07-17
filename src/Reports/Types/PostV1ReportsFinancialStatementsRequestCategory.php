<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsFinancialStatementsRequestCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
