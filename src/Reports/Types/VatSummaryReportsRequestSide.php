<?php

namespace Nordlet\Reports\Types;

enum VatSummaryReportsRequestSide: string
{
    case Sales = "sales";
    case Purchases = "purchases";
}
