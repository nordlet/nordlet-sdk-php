<?php

namespace Nordlet\Capture\Types;

enum PostV1CaptureDocumentsConfirmResponseInvoiceStatus: string
{
    case Draft = "draft";
    case Registered = "registered";
}
