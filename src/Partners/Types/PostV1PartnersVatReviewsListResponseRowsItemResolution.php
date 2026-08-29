<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsListResponseRowsItemResolution: string
{
    case ConfirmedValid = "confirmed_valid";
    case ConfirmedInvalid = "confirmed_invalid";
    case Dismissed = "dismissed";
    case Revalidated = "revalidated";
    case Superseded = "superseded";
}
