<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesListSalesResponseRowsItemDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
