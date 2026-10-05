<?php

namespace Nordlet\Fleet\Types;

enum VehiclesListFleetResponseRowsItemStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
