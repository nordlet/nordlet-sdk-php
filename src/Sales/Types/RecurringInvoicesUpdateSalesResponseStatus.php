<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesUpdateSalesResponseStatus: string
{
    case Active = "active";
    case Paused = "paused";
    case Finished = "finished";
}
