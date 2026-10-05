<?php

namespace Nordlet\Fleet\Types;

enum VehiclesCreateFleetResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
