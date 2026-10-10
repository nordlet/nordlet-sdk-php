<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseOppositeInvoiceStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
