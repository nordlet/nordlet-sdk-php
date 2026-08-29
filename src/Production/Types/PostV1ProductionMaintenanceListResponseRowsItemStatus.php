<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceListResponseRowsItemStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
