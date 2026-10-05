<?php

namespace Nordlet\Capture\Types;

enum DocumentsListCaptureResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
