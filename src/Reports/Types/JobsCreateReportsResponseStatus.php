<?php

namespace Nordlet\Reports\Types;

enum JobsCreateReportsResponseStatus: string
{
    case Queued = "queued";
    case Running = "running";
    case Completed = "completed";
    case Failed = "failed";
}
