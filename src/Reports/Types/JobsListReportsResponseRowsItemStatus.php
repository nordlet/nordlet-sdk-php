<?php

namespace Nordlet\Reports\Types;

enum JobsListReportsResponseRowsItemStatus: string
{
    case Queued = "queued";
    case Running = "running";
    case Completed = "completed";
    case Failed = "failed";
}
