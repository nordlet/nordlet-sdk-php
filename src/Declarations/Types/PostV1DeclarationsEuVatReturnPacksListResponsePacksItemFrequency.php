<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsEuVatReturnPacksListResponsePacksItemFrequency: string
{
    case Monthly = "monthly";
    case Quarterly = "quarterly";
    case Annual = "annual";
}
