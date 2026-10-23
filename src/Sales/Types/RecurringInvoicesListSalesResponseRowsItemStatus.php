<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesListSalesResponseRowsItemStatus: string
{
    case Active = "active";
    case Paused = "paused";
    case Finished = "finished";
}
