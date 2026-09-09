<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersFindOrCreateResponsePartnerLegalCountryClass: string
{
    case Lt = "lt";
    case Eu = "eu";
    case NonEu = "non_eu";
}
