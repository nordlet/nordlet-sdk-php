<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsCertificatesDeleteRequestFieldKey: string
{
    case Certificate = "certificate";
    case PrivateKey = "privateKey";
}
