<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsGetResponseStatus: string
{
    case Pending = "pending";
    case Extracted = "extracted";
    case Failed = "failed";
    case Linked = "linked";
}
