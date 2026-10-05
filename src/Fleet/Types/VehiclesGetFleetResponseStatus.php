<?php

namespace Nordlet\Fleet\Types;

enum VehiclesGetFleetResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
