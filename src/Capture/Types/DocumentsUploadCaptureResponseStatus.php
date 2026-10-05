<?php

namespace Nordlet\Capture\Types;

enum DocumentsUploadCaptureResponseStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
