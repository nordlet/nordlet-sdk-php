<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCreateRequestType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
