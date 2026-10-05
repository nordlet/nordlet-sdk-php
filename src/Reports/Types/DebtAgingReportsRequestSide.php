<?php

namespace Nordlet\Reports\Types;

enum DebtAgingReportsRequestSide: string
{
    case Receivables = "receivables";
    case Payables = "payables";
}
