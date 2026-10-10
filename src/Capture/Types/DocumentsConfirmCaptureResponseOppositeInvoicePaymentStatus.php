<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseOppositeInvoicePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
