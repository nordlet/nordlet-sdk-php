<?php

namespace Nordlet\Hr\Types;

enum ContractsCreateHrResponseType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
