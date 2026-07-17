<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsVatDetailRequestSide: string
{
    case Sales = "sales";
    case Purchases = "purchases";
}
