<?php

namespace Nordlet\Partners\Types;

enum PostV1PartnersVatReviewsResolveResponseReason: string
{
    case Invalid = "invalid";
    case ServiceError = "service_error";
    case NameMismatch = "name_mismatch";
}
