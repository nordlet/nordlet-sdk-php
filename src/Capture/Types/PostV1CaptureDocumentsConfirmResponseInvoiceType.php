<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsConfirmResponseInvoiceType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
