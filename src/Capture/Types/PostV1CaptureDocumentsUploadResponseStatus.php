<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsUploadResponseStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
