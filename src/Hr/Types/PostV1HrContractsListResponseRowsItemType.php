<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsListResponseRowsItemType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
