<?php

namespace Nordlet\Production\Types;

enum MaintenanceListProductionResponseRowsItemType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
