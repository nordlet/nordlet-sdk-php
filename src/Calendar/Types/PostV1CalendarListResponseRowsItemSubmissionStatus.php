<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarListResponseRowsItemSubmissionStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
