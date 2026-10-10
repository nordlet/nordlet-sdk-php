<?php

namespace Nordlet\Capture\Types;

enum DocumentsGetCaptureResponseExtractionDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
