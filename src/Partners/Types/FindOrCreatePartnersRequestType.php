<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersRequestType: string
{
    case Company = "company";
    case Person = "person";
}
