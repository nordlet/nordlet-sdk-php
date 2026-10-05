<?php

namespace Nordlet\Production\Types;

enum MaintenanceListProductionResponseRowsItemStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
