<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesCreateSalesResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
    case Finished = "finished";
}
