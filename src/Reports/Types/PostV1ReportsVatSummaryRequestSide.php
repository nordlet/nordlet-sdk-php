<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsVatSummaryRequestSide: string
{
    case Sales = "sales";
    case Purchases = "purchases";
}
