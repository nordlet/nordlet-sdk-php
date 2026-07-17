<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersFindOrCreateResponsePartnerType: string
{
    case Company = "company";
    case Person = "person";
}
