<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCompleteResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
