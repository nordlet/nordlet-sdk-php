<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseCaptureExtractionDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
