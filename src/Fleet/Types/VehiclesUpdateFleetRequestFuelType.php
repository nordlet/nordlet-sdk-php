<?php

namespace Nordlet\Fleet\Types;

enum VehiclesUpdateFleetRequestFuelType: string
{
    case Petrol = "petrol";
    case Diesel = "diesel";
    case Electric = "electric";
    case Hybrid = "hybrid";
    case Lpg = "lpg";
    case Other = "other";
}
