<?php

namespace Nordlet\Account\Types;

enum ExportAccountResponseCreditTransactionsItemSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
