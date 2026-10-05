<?php

namespace Nordlet\Production\Types;

enum MaintenanceCreateProductionResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
