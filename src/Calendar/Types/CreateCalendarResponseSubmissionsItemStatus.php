<?php

namespace Nordlet\Calendar\Types;

enum CreateCalendarResponseSubmissionsItemStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
