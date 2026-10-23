<?php

namespace Nordlet\Sales\Types;

enum RecurringInvoicesUpdateSalesRequestStatus: string
{
    case Active = "active";
    case Paused = "paused";
}
