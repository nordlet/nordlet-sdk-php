<?php

namespace Nordlet\Partners\Types;

enum VatReviewsResolvePartnersRequestResolution: string
{
    case ConfirmedValid = "confirmed_valid";
    case ConfirmedInvalid = "confirmed_invalid";
    case Dismissed = "dismissed";
}
