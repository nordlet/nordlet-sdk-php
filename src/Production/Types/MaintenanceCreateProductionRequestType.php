<?php

namespace Nordlet\Production\Types;

enum MaintenanceCreateProductionRequestType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
