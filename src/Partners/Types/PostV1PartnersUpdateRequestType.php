<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersUpdateRequestType: string
{
    case Company = "company";
    case Person = "person";
}
