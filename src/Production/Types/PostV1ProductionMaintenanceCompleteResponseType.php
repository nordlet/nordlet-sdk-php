<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCompleteResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
