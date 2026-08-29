<?php

namespace Nordlet\Fleet\Types;

enum PostV1FleetVehiclesGetResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
