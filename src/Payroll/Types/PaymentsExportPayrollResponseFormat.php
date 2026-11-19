<?php

namespace Nordlet\Payroll\Types;

enum PaymentsExportPayrollResponseFormat: string
{
    case Pain00100103 = "pain.001.001.03";
    case Pain00800102 = "pain.008.001.02";
    case BacsStandard18 = "bacs-standard-18";
    case Nacha = "nacha";
}
