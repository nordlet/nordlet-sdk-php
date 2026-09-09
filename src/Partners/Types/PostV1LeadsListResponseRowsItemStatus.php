<?php

namespace Nordlet\Partners\Types;

enum PostV1LeadsListResponseRowsItemStatus: string
{
    case New_ = "new";
    case Contacted = "contacted";
    case Qualified = "qualified";
    case Lost = "lost";
    case Converted = "converted";
}
