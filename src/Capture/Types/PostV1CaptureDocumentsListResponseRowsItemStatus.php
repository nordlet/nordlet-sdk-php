<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsListResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
