<?php

namespace Nordlet\Sales\Types;

enum RecognitionSchedulesListSalesResponseRowsItemStatus: string
{
    case Pending = "pending";
    case Recognized = "recognized";
    case Cancelled = "cancelled";
}
