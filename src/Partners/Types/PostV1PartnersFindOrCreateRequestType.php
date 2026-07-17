<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersFindOrCreateRequestType: string
{
    case Company = "company";
    case Person = "person";
}
