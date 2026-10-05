<?php

namespace Nordlet\OperationTypes\Types;

enum UpdateOperationTypesResponseInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
