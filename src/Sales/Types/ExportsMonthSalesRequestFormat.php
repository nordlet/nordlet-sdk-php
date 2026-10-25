<?php

namespace Nordlet\Sales\Types;

enum ExportsMonthSalesRequestFormat: string
{
    case Csv = "csv";
    case Pdf = "pdf";
    case Nordlet = "nordlet";
}
