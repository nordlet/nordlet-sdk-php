<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
