<?php

namespace Nordlet\Reports\Types;

enum PostV1ReportsJobsCreateResponseStatus: string
{
    case Queued = "queued";
    case Running = "running";
    case Completed = "completed";
    case Failed = "failed";
}
