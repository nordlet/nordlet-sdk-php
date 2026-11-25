<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersRequestLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
