<?php

namespace Nordlet\Partners\Types;

enum PostV1LeadsCreateRequestStatus: string
{
    case New_ = "new";
    case Contacted = "contacted";
    case Qualified = "qualified";
    case Lost = "lost";
}
