<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsExtractResponseStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
