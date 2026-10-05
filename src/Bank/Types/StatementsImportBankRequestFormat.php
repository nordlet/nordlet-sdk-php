<?php

namespace Nordlet\Bank\Types;

enum StatementsImportBankRequestFormat: string
{
    case Camt053 = "camt053";
    case Mt940 = "mt940";
    case StripeCsv = "stripe-csv";
}
