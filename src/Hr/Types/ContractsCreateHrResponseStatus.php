<?php

namespace Nordlet\Hr\Types;

enum ContractsCreateHrResponseStatus: string
{
    case Active = "active";
    case Ended = "ended";
}
