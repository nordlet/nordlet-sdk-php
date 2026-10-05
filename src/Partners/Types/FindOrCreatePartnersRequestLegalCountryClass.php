<?php

namespace Nordlet\Partners\Types;

enum FindOrCreatePartnersRequestLegalCountryClass: string
{
    case Lt = "lt";
    case Eu = "eu";
    case NonEu = "non_eu";
}
