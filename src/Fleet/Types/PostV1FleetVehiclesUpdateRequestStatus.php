<?php

namespace Nordlet\Fleet\Types;

enum PostV1FleetVehiclesUpdateRequestStatus: string
{
    case Active = "active";
    case Sold = "sold";
    case Scrapped = "scrapped";
}
