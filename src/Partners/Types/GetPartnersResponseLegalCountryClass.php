<?php

namespace Nordlet\Partners\Types;

enum GetPartnersResponseLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
