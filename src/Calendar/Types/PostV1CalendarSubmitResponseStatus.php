<?php

namespace Nordlet\Calendar\Types;

enum PostV1CalendarSubmitResponseStatus: string
{
    case Generated = "generated";
    case Submitted = "submitted";
    case Accepted = "accepted";
    case Rejected = "rejected";
}
