<?php

namespace Nordlet\Capture\Types;

enum DocumentsExtractCaptureResponseStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
