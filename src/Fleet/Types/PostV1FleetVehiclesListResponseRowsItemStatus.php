<?php

namespace Nordlet\Fleet\Types;

enum PostV1FleetVehiclesListResponseRowsItemStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
