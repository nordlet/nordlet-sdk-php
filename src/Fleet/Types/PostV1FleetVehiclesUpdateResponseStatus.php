<?php

namespace Nordlet\Fleet\Types;

enum PostV1FleetVehiclesUpdateResponseStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
