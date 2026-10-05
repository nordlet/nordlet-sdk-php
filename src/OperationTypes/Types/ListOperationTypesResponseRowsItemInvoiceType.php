<?php

namespace Nordlet\OperationTypes\Types;

enum ListOperationTypesResponseRowsItemInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
    case Proforma = "proforma";
    case Advance = "advance";
}
