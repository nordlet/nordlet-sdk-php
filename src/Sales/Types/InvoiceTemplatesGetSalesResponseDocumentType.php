<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesGetSalesResponseDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
