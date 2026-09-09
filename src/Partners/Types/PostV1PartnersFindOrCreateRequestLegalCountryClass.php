<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersFindOrCreateRequestLegalCountryClass: string
{
    case Lt = "lt";
    case Eu = "eu";
    case NonEu = "non_eu";
}
