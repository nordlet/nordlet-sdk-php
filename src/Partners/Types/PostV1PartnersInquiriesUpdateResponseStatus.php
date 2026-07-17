<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersInquiriesUpdateResponseStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
