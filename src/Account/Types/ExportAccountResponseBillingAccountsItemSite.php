<?php

namespace Nordlet\Account\Types;

enum ExportAccountResponseBillingAccountsItemSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
