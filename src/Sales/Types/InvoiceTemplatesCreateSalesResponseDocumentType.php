<?php

namespace Nordlet\Sales\Types;

enum InvoiceTemplatesCreateSalesResponseDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
