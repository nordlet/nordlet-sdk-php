<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsEndResponseType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
