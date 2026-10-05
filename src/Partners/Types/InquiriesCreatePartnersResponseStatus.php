<?php

namespace Nordlet\Partners\Types;

enum InquiriesCreatePartnersResponseStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
