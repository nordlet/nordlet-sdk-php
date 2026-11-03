<?php

namespace Nordlet\Billing\Types;

enum SubscriptionCancelBillingResponseSite: string
{
    case App = "app";
    case Invoice = "invoice";
}
