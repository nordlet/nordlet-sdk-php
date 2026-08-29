<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCreateResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
