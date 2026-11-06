<?php

namespace Nordlet\Billing\Types;

enum FreeSandboxStartBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
