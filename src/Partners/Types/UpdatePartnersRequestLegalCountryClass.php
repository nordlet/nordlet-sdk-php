<?php

namespace Nordlet\Partners\Types;

enum UpdatePartnersRequestLegalCountryClass: string
{
    case Lt = "lt";
    case Eu = "eu";
    case NonEu = "non_eu";
}
