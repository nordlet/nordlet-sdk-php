<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesCreateSalesResponseFrequency: string
{
    case Weekly = "weekly";
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
