<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsUpdateRequestStatus: string
{
    case Draft = "draft";
    case Active = "active";
    case Expired = "expired";
    case Terminated = "terminated";
}
