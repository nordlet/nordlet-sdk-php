<?php

namespace Nordlet\Hr\Types;

enum BusinessTripsApproveHrResponseStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
