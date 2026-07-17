<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersCreateRequestType: string
{
    case Company = "company";
    case Person = "person";
}
