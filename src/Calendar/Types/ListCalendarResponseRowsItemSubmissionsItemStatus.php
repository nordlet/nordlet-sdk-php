<?php

namespace Nordlet\Calendar\Types;

enum ListCalendarResponseRowsItemSubmissionsItemStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
