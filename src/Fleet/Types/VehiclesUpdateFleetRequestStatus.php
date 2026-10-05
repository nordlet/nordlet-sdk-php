<?php

namespace Nordlet\Fleet\Types;

enum VehiclesUpdateFleetRequestStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
