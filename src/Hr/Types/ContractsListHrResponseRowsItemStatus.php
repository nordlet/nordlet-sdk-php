<?php

namespace Nordlet\Hr\Types;

enum ContractsListHrResponseRowsItemStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
