<?php

namespace Nordlet\Reports\Types;

enum VatDetailReportsRequestSide: string
{
    case Sales = "sales";
    case Purchases = "purchases";
}
