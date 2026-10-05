<?php

namespace Nordlet\Calendar\Types;

enum GetCalendarResponseSubmissionsItemStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
