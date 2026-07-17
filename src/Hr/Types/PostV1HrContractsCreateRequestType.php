<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsCreateRequestType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
