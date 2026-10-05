<?php

namespace Nordlet\Calendar\Types;

enum SubmitCalendarResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
