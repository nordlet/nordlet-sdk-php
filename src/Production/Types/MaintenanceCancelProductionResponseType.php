<?php

namespace Nordlet\Production\Types;

enum MaintenanceCancelProductionResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
