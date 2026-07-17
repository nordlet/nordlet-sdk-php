<?php

namespace Nordlet\Hr\Types;

enum PostV1HrContractsCreateResponseType: string
{
    case Permanent = "permanent";
    case FixedTerm = "fixed_term";
}
