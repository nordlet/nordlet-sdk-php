<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersInquiriesListResponseRowsItemStatus: string
{
    case New_ = "new";
    case InProgress = "in_progress";
    case Closed = "closed";
}
