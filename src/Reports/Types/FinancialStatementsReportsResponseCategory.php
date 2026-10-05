<?php

namespace Nordlet\Reports\Types;

enum FinancialStatementsReportsResponseCategory: string
{
    case Micro = "micro";
    case Small = "small";
    case Medium = "medium";
    case Large = "large";
}
