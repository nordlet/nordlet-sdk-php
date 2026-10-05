<?php

namespace Nordlet\Hr\Types;

enum ContractsListHrResponseRowsItemType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
