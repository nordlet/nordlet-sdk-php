<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceListResponseRowsItemType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
