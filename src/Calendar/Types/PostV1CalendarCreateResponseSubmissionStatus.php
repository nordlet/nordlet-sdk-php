<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarCreateResponseSubmissionStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
