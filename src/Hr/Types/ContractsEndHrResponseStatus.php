<?php

namespace Nordlet\Hr\Types;

enum ContractsEndHrResponseStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
