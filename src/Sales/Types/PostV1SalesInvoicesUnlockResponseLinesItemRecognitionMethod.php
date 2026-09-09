<?php

namespace Nordlet\Sales\Types;

enum PostV1SalesInvoicesUnlockResponseLinesItemRecognitionMethod: string
{
    case PointInTime = "point_in_time";
    case Ratable = "ratable";
    case Milestone = "milestone";
    case PercentComplete = "percent_complete";
}
