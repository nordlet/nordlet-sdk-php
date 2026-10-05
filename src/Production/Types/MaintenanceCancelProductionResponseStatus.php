<?php

namespace Nordlet\Production\Types;

enum MaintenanceCancelProductionResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
