<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersInquiriesCreateResponseStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
