<?php

namespace Nordlet\Production\Types;

enum MaintenanceCompleteProductionResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
