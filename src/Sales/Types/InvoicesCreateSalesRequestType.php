<?php

namespace Nordlet\Sales\Types;

enum InvoicesCreateSalesRequestType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
