<?php

namespace Nordlet\Hr\Types;

enum ContractsCreateHrRequestType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
