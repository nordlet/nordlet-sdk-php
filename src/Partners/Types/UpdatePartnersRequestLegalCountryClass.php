<?php

namespace Nordlet\Partners\Types;

enum UpdatePartnersRequestLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
