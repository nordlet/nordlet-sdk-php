<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsDebtAgingRequestSide: string
{
    case Receivables = "receivables";
    case Payables = "payables";
}
