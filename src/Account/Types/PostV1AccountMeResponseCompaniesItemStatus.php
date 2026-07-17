<?php

namespace Nordlet\Account\Types;

enum PostV1AccountMeResponseCompaniesItemStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
