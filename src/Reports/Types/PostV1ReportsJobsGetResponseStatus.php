<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsJobsGetResponseStatus: string
{
    case Queued = "queued";
    case Running = "running";
    case Completed = "completed";
    case Failed = "failed";
}
