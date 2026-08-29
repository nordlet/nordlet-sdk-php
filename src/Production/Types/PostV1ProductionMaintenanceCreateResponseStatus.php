<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCreateResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
