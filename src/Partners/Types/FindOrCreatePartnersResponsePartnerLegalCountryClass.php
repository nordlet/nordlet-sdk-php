<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersResponsePartnerLegalCountryClass: string
{
    case Lt = "lt";
    case Eu = "eu";
    case NonEu = "non_eu";
}
