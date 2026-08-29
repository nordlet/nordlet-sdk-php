<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCancelResponseStatus: string
{
    case Planned = "planned";
    case Completed = "completed";
    case Cancelled = "cancelled";
}
