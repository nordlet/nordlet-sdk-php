<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesRecognitionSchedulesListResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Recognized = "recognized";
    case Cancelled = "cancelled";
}
