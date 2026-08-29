<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsConfirmResponseInvoicePaymentStatus: string
{
    case Unpaid = "unpaid";
    case Partial = "partial";
    case Paid = "paid";
}
