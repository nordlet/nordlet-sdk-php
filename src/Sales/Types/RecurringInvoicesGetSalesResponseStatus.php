<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesGetSalesResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
    case Finished = "finished";
}
