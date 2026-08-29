<?php

namespace Nordlet\Production\Types;

enum PostV1ProductionMaintenanceCancelResponseType: string
{
    case Preventive = "preventive";
    case Corrective = "corrective";
}
