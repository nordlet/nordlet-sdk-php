<?php

namespace Nordlet\Partners\Types;

enum PostV1LeadsConvertRequestPartnerType: string
{
    case Company = "company";
    case Person = "person";
}
