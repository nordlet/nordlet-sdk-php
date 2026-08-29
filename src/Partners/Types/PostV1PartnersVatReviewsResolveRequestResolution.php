<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsResolveRequestResolution: string
{
    case ConfirmedValid = "confirmed_valid";
    case ConfirmedInvalid = "confirmed_invalid";
    case Dismissed = "dismissed";
}
