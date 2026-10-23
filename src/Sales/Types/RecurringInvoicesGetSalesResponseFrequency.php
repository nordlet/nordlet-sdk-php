<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesGetSalesResponseFrequency: string
{
    case Weekly = "weekly";
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
