<?php

namespace Nordlet\Sales\Types;

enum InvoicesUnlockSalesResponseType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
