<?php

namespace Nordlet\Partners\Types;

enum CreatePartnersResponseLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
