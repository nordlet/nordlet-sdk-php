<?php

namespace Nordlet\Production\Types;

enum MaintenanceCreateProductionResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
