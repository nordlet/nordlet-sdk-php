<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseInvoicePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
