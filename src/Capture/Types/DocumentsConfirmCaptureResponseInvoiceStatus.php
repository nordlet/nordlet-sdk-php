<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseInvoiceStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
