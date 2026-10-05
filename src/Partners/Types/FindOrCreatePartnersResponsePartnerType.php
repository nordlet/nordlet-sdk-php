<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersResponsePartnerType: string
{
    case Company = "company";
    case Person = "person";
}
