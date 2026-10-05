<?php

namespace Nordlet\Calendar\Types;

enum ListCalendarResponseRowsItemSubmissionStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
