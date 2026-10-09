<?php

namespace Nordlet\Hr\Types;

enum BusinessTripsListHrResponseRowsItemStatus: string
{
    case Draft = "draft";
    case Approved = "approved";
}
