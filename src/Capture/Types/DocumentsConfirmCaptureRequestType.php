<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureRequestType: string
{
    case Invoice = "invoice";
    case CreditNote = "credit_note";
}
