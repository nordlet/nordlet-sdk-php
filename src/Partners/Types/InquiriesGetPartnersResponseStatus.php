<?php

namespace Nordlet\Partners\Types;

enum InquiriesGetPartnersResponseStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
