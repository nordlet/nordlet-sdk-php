<?php

namespace Nordlet\Partners\Types;

enum InquiriesListPartnersResponseRowsItemStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
