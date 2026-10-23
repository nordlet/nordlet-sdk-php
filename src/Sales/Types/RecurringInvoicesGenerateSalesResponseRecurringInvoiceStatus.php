<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesGenerateSalesResponseRecurringInvoiceStatus: string
{
    case Active = "active";
    case Paused = "paused";
    case Finished = "finished";
}
