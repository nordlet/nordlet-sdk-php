<?php

namespace Nordlet\Capture\Types;

enum DocumentsExtractCaptureResponseExtractionDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
