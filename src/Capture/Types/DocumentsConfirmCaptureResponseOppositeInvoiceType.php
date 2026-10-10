<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseOppositeInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
