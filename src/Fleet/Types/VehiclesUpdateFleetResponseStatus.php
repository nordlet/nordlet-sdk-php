<?php

namespace Nordlet\Fleet\Types;

enum VehiclesUpdateFleetResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
