<?php

namespace Nordlet\Partners\Types;

enum UpdatePartnersRequestType: string
{
    case Company = "company";
    case Person = "person";
}
