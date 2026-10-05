<?php

namespace Nordlet\Reports\Types;

enum FinancialStatementsReportsRequestCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
