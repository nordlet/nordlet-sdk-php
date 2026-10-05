<?php

namespace Nordlet\Production\Types;

enum MaintenanceCompleteProductionResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
