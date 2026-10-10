<?php

namespace Nordlet\Capture\Types;

enum DocumentsUploadCaptureResponseExtractionDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
