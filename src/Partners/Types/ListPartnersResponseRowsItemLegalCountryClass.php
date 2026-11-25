<?php

namespace Nordlet\Partners\Types;

enum ListPartnersResponseRowsItemLegalCountryClass: string
{
    case Domestic = "domestic";
    case Eu = "eu";
    case NonEu = "non_eu";
}
