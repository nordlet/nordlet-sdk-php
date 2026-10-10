<?php

namespace Nordlet\Capture\Types;

enum DocumentsListCaptureResponseRowsItemExtractionDocumentType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
