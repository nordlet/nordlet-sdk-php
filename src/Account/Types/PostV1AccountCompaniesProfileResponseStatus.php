<?php

namespace Nordlet\Account\Types;

enum PostV1AccountCompaniesProfileResponseStatus: string
{
    case Active = "active";
    case Archived = "archived";
    case Deleted = "deleted";
}
