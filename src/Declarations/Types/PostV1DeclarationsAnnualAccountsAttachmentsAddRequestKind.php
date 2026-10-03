<?php

namespace Nordlet\Declarations\Types;

enum PostV1DeclarationsAnnualAccountsAttachmentsAddRequestKind: string
{
    case FullReport = "full_report";
    case Notes = "notes";
    case ManagementReport = "management_report";
    case AuditorStatement = "auditor_statement";
    case AppropriationResolution = "appropriation_resolution";
    case ApprovalCertificate = "approval_certificate";
    case GeneralDataSheet = "general_data_sheet";
    case Other = "other";
}
