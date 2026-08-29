<?php

namespace Nordlet\Fleet\Types;

enum PostV1FleetVehiclesCreateResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
