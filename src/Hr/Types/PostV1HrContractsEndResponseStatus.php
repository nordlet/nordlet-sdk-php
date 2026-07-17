<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsEndResponseStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
