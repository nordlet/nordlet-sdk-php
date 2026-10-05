<?php

namespace Nordlet\Capture\Types;

enum DocumentsConfirmCaptureResponseCaptureStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
