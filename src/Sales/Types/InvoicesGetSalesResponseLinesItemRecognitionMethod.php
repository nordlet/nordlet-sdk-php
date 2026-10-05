<?php

namespace Nordlet\Sales\Types;

enum InvoicesGetSalesResponseLinesItemRecognitionMethod: string
{
    case PointInTime = "point_in_time";
    case Ratable = "ratable";
    case Milestone = "milestone";
    case PercentComplete = "percent_complete";
}
