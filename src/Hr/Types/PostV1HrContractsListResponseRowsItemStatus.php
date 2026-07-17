<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsListResponseRowsItemStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
