<?php

namespace Nordlet\Partners\Types;

enum VatReviewsListPartnersResponseRowsItemReason: string
{
    case Invalid = "invalid";
    case ServiceError = "service_error";
    case NameMismatch = "name_mismatch";
}
