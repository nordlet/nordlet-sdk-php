<?php

namespace Nordlet\Partners\Types;

enum CreatePartnersRequestLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
