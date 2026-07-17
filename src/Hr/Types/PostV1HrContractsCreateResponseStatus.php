<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsCreateResponseStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
