<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsJobsListResponseRowsItemStatus: string
{
    case Queued = "queued";
    case Running = "running";
    case Completed = "completed";
    case Failed = "failed";
}
