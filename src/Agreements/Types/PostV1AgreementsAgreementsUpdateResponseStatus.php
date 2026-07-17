<?php

namespace Nordlet\Agreements\Types;

enum PostV1AgreementsAgreementsUpdateResponseStatus: string
{
    case Draft = "draft";
    case Active = "active";
    case Expired = "expired";
    case Terminated = "terminated";
}
