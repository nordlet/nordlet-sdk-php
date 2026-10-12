<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesUpdateSalesResponseDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
