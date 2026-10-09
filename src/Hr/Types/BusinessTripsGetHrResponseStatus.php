<?php

namespace Nordlet\Hr\Types;

enum BusinessTripsGetHrResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
