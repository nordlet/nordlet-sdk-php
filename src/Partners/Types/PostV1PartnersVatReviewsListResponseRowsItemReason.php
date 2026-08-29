<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsListResponseRowsItemReason: string
{
    case Invalid = "invalid";
    case ServiceError = "service_error";
    case NameMismatch = "name_mismatch";
}
