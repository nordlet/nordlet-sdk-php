<?php

namespace Nordlet\Partners\Types;

enum CreatePartnersRequestType: string
{
    case Company = "company";
    case Person = "person";
}
