<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesUpdateResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
