<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersResponsePartnerLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
