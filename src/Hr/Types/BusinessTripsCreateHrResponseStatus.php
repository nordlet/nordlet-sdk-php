<?php

namespace Nordlet\Hr\Types;

enum BusinessTripsCreateHrResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
