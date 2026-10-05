<?php

namespace Nordlet\Hr\Types;

enum ContractsEndHrResponseType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
