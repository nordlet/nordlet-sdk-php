<?php

namespace Nordlet\Declarations;

use Psr\Http\Client\ClientInterface;
use Nordlet\Core\Client\RawClient;
use Nordlet\Declarations\Requests\LtIntrastatComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtIntrastatComputeDeclarationsResponse;
use Nordlet\Exceptions\NordletException;
use Nordlet\Exceptions\NordletApiException;
use Nordlet\Core\Json\JsonApiRequest;
use Nordlet\Environments;
use Nordlet\Core\Client\HttpMethod;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Nordlet\Declarations\Requests\LtIvazGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LtIvazGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\LtIntrastatObligationDeclarationsRequest;
use Nordlet\Declarations\Types\LtIntrastatObligationDeclarationsResponse;
use Nordlet\Declarations\Requests\LtIsafGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LtIsafGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\LtFr0600ComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtFr0600ComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\LtGpm313ComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtGpm313ComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\LtSamComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtSamComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\LtSdGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LtSdGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\LtSaftGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LtSaftGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\LtIvazAmendDeclarationsRequest;
use Nordlet\Declarations\Types\LtIvazAmendDeclarationsResponse;
use Nordlet\Declarations\Requests\LtIvazCancelDeclarationsRequest;
use Nordlet\Declarations\Types\LtIvazCancelDeclarationsResponse;
use Nordlet\Declarations\Requests\LtFr0564ComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtFr0564ComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\LtGpm312ComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtGpm312ComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\LtPln204ComputeDeclarationsRequest;
use Nordlet\Declarations\Types\LtPln204ComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\EuOssComputeDeclarationsRequest;
use Nordlet\Declarations\Types\EuOssComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\EuIossComputeDeclarationsRequest;
use Nordlet\Declarations\Types\EuIossComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\EuOwnGoodsTransfersComputeDeclarationsRequest;
use Nordlet\Declarations\Types\EuOwnGoodsTransfersComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\EuDigitalReportingListDeclarationsRequest;
use Nordlet\Declarations\Types\EuDigitalReportingListDeclarationsResponse;
use Nordlet\Declarations\Requests\EuDac7PreviewDeclarationsRequest;
use Nordlet\Declarations\Types\EuDac7PreviewDeclarationsResponse;
use Nordlet\Declarations\Requests\EuDac7XmlDeclarationsRequest;
use Nordlet\Declarations\Types\EuDac7XmlDeclarationsResponse;
use Nordlet\Declarations\Requests\EuDistanceSalesThresholdGetDeclarationsRequest;
use Nordlet\Declarations\Types\EuDistanceSalesThresholdGetDeclarationsResponse;
use Nordlet\Declarations\Requests\EuUnionTurnoverGetDeclarationsRequest;
use Nordlet\Declarations\Types\EuUnionTurnoverGetDeclarationsResponse;
use Nordlet\Declarations\Requests\EuSmeCrossBorderReportComputeDeclarationsRequest;
use Nordlet\Declarations\Types\EuSmeCrossBorderReportComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\EuSmeThresholdsListDeclarationsRequest;
use Nordlet\Declarations\Types\EuSmeThresholdsListDeclarationsResponse;
use Nordlet\Declarations\Requests\EuSmeThresholdGetDeclarationsRequest;
use Nordlet\Declarations\Types\EuSmeThresholdGetDeclarationsResponse;
use Nordlet\Declarations\Requests\EuVatReturnPacksListDeclarationsRequest;
use Nordlet\Declarations\Types\EuVatReturnPacksListDeclarationsResponse;
use Nordlet\Declarations\Requests\EuVatReturnComputeDeclarationsRequest;
use Nordlet\Declarations\Types\EuVatReturnComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\PlJpkV7MGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlJpkV7MGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlVatUeGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlVatUeGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlIntrastatGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlIntrastatGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlKsefReceivedListDeclarationsRequest;
use Nordlet\Declarations\Types\PlKsefReceivedListDeclarationsResponse;
use Nordlet\Declarations\Requests\PlKsefReceivedFetchDeclarationsRequest;
use Nordlet\Declarations\Types\PlKsefReceivedFetchDeclarationsResponse;
use Nordlet\Declarations\Requests\PlKsefReceiptDeclarationsRequest;
use Nordlet\Declarations\Types\PlKsefReceiptDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxAdjustmentsListDeclarationsRequest;
use Nordlet\Declarations\Types\TaxAdjustmentsListDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxAdjustmentsCreateDeclarationsRequest;
use Nordlet\Declarations\Types\TaxAdjustmentsCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxAdjustmentsUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\TaxAdjustmentsUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxAdjustmentsDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\TaxAdjustmentsDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxPaymentsListDeclarationsRequest;
use Nordlet\Declarations\Types\TaxPaymentsListDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxPaymentsCreateDeclarationsRequest;
use Nordlet\Declarations\Types\TaxPaymentsCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxPaymentsUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\TaxPaymentsUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\TaxPaymentsDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\TaxPaymentsDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\VatProrataSetDeclarationsRequest;
use Nordlet\Declarations\Types\VatProrataSetDeclarationsResponse;
use Nordlet\Declarations\Requests\VatProrataGetDeclarationsRequest;
use Nordlet\Declarations\Types\VatProrataGetDeclarationsResponse;
use Nordlet\Declarations\Requests\VatProrataListDeclarationsRequest;
use Nordlet\Declarations\Types\VatProrataListDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsGetDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsGetDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsSetDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsSetDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsSignaturesCreateDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsSignaturesCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsSignaturesUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsSignaturesUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsSignaturesDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsSignaturesDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsDistributionsCreateDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsDistributionsCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsDistributionsUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsDistributionsUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsDistributionsDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsDistributionsDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsAttachmentsAddDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsAttachmentsAddDeclarationsResponse;
use Nordlet\Declarations\Requests\AnnualAccountsAttachmentsDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\AnnualAccountsAttachmentsDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\CyTd4GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\CyTd4GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\CyHe32GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\CyHe32GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\DeReturnsGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\DeReturnsGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\DeEuerGetDeclarationsRequest;
use Nordlet\Declarations\Types\DeEuerGetDeclarationsResponse;
use Nordlet\Declarations\Requests\DeReturnFactsGetDeclarationsRequest;
use Nordlet\Declarations\Types\DeReturnFactsGetDeclarationsResponse;
use Nordlet\Declarations\Requests\DeReturnFactsSetDeclarationsRequest;
use Nordlet\Declarations\Types\DeReturnFactsSetDeclarationsResponse;
use Nordlet\Declarations\Requests\DeDeuevGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\DeDeuevGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\DeBeitragsnachweisGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\DeBeitragsnachweisGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\DkSelskabsskatGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\DkSelskabsskatGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\EeEmploymentRegisterSendDeclarationsRequest;
use Nordlet\Declarations\Types\EeEmploymentRegisterSendDeclarationsResponse;
use Nordlet\Declarations\Requests\EsVerifactuDeclaracionResponsableDeclarationsRequest;
use Nordlet\Declarations\Types\EsVerifactuDeclaracionResponsableDeclarationsResponse;
use Nordlet\Declarations\Requests\IeCt1GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\IeCt1GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\IeB1GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\IeB1GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\ItSdiPurchaseSendDeclarationsRequest;
use Nordlet\Declarations\Types\ItSdiPurchaseSendDeclarationsResponse;
use Nordlet\Declarations\Requests\ItSdiPurchasePreviewDeclarationsRequest;
use Nordlet\Declarations\Types\ItSdiPurchasePreviewDeclarationsResponse;
use Nordlet\Declarations\Requests\LtSaftSendDeclarationsRequest;
use Nordlet\Declarations\Types\LtSaftSendDeclarationsResponse;
use Nordlet\Declarations\Requests\LtSdFfdataDeclarationsRequest;
use Nordlet\Declarations\Types\LtSdFfdataDeclarationsResponse;
use Nordlet\Declarations\Requests\LtPln204FfdataDeclarationsRequest;
use Nordlet\Declarations\Types\LtPln204FfdataDeclarationsResponse;
use Nordlet\Declarations\Requests\MtCompanyTaxGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\MtCompanyTaxGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\MtAnnualReturnGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\MtAnnualReturnGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlJpkFaGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlJpkFaGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlJpkKrGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlJpkKrGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlJpkMagGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlJpkMagGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlPit11GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlPit11GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlCit8GenerateDeclarationsRequest;
use Nordlet\Declarations\Types\PlCit8GenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\PlZusDraComputeDeclarationsRequest;
use Nordlet\Declarations\Types\PlZusDraComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\PlZusDraKeduDeclarationsRequest;
use Nordlet\Declarations\Types\PlZusDraKeduDeclarationsResponse;
use Nordlet\Declarations\Requests\PlZusDraPdfDeclarationsRequest;
use Nordlet\Declarations\Types\PlZusDraPdfDeclarationsResponse;
use Nordlet\Declarations\Requests\RoEtransportBuildDeclarationsRequest;
use Nordlet\Declarations\Types\RoEtransportBuildDeclarationsResponse;
use Nordlet\Declarations\Requests\RoEtransportSubmitDeclarationsRequest;
use Nordlet\Declarations\Types\RoEtransportSubmitDeclarationsResponse;
use Nordlet\Declarations\Requests\RoEtransportStatusDeclarationsRequest;
use Nordlet\Declarations\Types\RoEtransportStatusDeclarationsResponse;
use Nordlet\Declarations\Requests\LiLohndeklarationGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LiLohndeklarationGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\LiLohnlistenGenerateDeclarationsRequest;
use Nordlet\Declarations\Types\LiLohnlistenGenerateDeclarationsResponse;
use Nordlet\Declarations\Requests\GbHmrcAuthorizeUrlGetDeclarationsRequest;
use Nordlet\Declarations\Types\GbHmrcAuthorizeUrlGetDeclarationsResponse;
use Nordlet\Declarations\Requests\GbHmrcConnectDeclarationsRequest;
use Nordlet\Declarations\Types\GbHmrcConnectDeclarationsResponse;
use Nordlet\Declarations\Requests\GbCorporationTaxComputeDeclarationsRequest;
use Nordlet\Declarations\Types\GbCorporationTaxComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\GbReturnFactsGetDeclarationsRequest;
use Nordlet\Declarations\Types\GbReturnFactsGetDeclarationsResponse;
use Nordlet\Declarations\Requests\GbReturnFactsSetDeclarationsRequest;
use Nordlet\Declarations\Types\GbReturnFactsSetDeclarationsResponse;
use Nordlet\Declarations\Requests\GbP11DItemsCreateDeclarationsRequest;
use Nordlet\Declarations\Types\GbP11DItemsCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\GbP11DItemsListDeclarationsRequest;
use Nordlet\Declarations\Types\GbP11DItemsListDeclarationsResponse;
use Nordlet\Declarations\Requests\GbP11DItemsDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\GbP11DItemsDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\GbP45GetDeclarationsRequest;
use Nordlet\Declarations\Types\GbP45GetDeclarationsResponse;
use Nordlet\Declarations\Requests\GbVatObligationsListDeclarationsRequest;
use Nordlet\Declarations\Types\GbVatObligationsListDeclarationsResponse;
use Nordlet\Declarations\Requests\GbVatReturnsGetDeclarationsRequest;
use Nordlet\Declarations\Types\GbVatReturnsGetDeclarationsResponse;
use Nordlet\Declarations\Requests\GbVatLiabilitiesListDeclarationsRequest;
use Nordlet\Declarations\Types\GbVatLiabilitiesListDeclarationsResponse;
use Nordlet\Declarations\Requests\GbVatPaymentsListDeclarationsRequest;
use Nordlet\Declarations\Types\GbVatPaymentsListDeclarationsResponse;
use Nordlet\Declarations\Requests\GbVatPenaltiesGetDeclarationsRequest;
use Nordlet\Core\Json\JsonDecoder;
use Nordlet\Declarations\Requests\Us941GetDeclarationsRequest;
use Nordlet\Declarations\Types\Us941GetDeclarationsResponse;
use Nordlet\Declarations\Requests\Us940GetDeclarationsRequest;
use Nordlet\Declarations\Types\Us940GetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsW2ListDeclarationsRequest;
use Nordlet\Declarations\Types\UsW2ListDeclarationsResponse;
use Nordlet\Declarations\Requests\UsIncomeTaxReturnGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsIncomeTaxReturnGetDeclarationsResponse;
use Nordlet\Declarations\Requests\Us1099NecListDeclarationsRequest;
use Nordlet\Declarations\Types\Us1099NecListDeclarationsResponse;
use Nordlet\Declarations\Requests\UsDeWithholdingGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsDeWithholdingGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsDeWithholdingReconciliationGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsDeWithholdingReconciliationGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsDeUnemploymentGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsDeUnemploymentGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsDeGrossReceiptsGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsDeGrossReceiptsGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsStateSalesGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsStateSalesGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsSalesTaxGetDeclarationsRequest;
use Nordlet\Declarations\Types\UsSalesTaxGetDeclarationsResponse;
use Nordlet\Declarations\Requests\UsDeFranchiseTaxComputeDeclarationsRequest;
use Nordlet\Declarations\Types\UsDeFranchiseTaxComputeDeclarationsResponse;
use Nordlet\Declarations\Requests\UsWorkweeksListDeclarationsRequest;
use Nordlet\Declarations\Types\UsWorkweeksListDeclarationsResponse;
use Nordlet\Declarations\Requests\UsFlsaRecordsListDeclarationsRequest;
use Nordlet\Declarations\Types\UsFlsaRecordsListDeclarationsResponse;
use Nordlet\Declarations\Requests\ConfigsListDeclarationsRequest;
use Nordlet\Declarations\Types\ConfigsListDeclarationsResponse;
use Nordlet\Declarations\Requests\ConfigsUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\ConfigsUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\CertificatesUploadDeclarationsRequest;
use Nordlet\Declarations\Types\CertificatesUploadDeclarationsResponse;
use Nordlet\Declarations\Requests\CertificatesListDeclarationsRequest;
use Nordlet\Declarations\Types\CertificatesListDeclarationsResponse;
use Nordlet\Declarations\Requests\CertificatesDeleteDeclarationsRequest;
use Nordlet\Declarations\Types\CertificatesDeleteDeclarationsResponse;
use Nordlet\Declarations\Requests\AutomationListDeclarationsRequest;
use Nordlet\Declarations\Types\AutomationListDeclarationsResponse;
use Nordlet\Declarations\Requests\AutomationUpdateDeclarationsRequest;
use Nordlet\Declarations\Types\AutomationUpdateDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsRetryDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsRetryDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsConfirmDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsConfirmDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsCorrectionPreviewDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsCorrectionPreviewDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsCreateDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsCreateDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsMarkDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsMarkDeclarationsResponse;
use Nordlet\Declarations\Requests\SubmissionsListDeclarationsRequest;
use Nordlet\Declarations\Types\SubmissionsListDeclarationsResponse;

class DeclarationsClient
{
    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param RawClient $client
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        RawClient $client,
        ?array $options = null,
    ) {
        $this->client = $client;
        $this->options = $options ?? [];
    }

    /**
     * Builds the Lithuanian Intrastat report of a month for one flow as the IDAIS INTRASTATReportSubmission XML: dispatches from the issued sale invoices and purchase credit notes, arrivals from the registered purchase invoices and sale credit notes, grouped into report items. `transactionNature`, `deliveryTerms`, `transportMode` and `regionCode` are the defaults for lines without their own values; `statisticalValueRequired` adds the statistical value to each item. Answers 422 when the company is not a VAT payer. With `persist`, the file is stored and a submission for `lt-intrastat-arrivals` or `lt-intrastat-dispatches` is created.
     *
     * @param LtIntrastatComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIntrastatComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIntrastatCompute(LtIntrastatComputeDeclarationsRequest $request, ?array $options = null): ?LtIntrastatComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/intrastat/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIntrastatComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the i.VAZ transport document message (iVAZ1.3.3) for up to 100 issued waybills and returns the XML. Answers 422 when the registration code of the company is not numeric or when a waybill is not issued. With `persist`, the file is stored and a submission for `lt-ivaz` is created.
     *
     * @param LtIvazGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIvazGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIvazGenerate(LtIvazGenerateDeclarationsRequest $request, ?array $options = null): ?LtIvazGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/ivaz/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIvazGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Checks the Intrastat reporting obligation of a year per flow: the value of goods traded with other Member States in the previous year, the month from which reporting is due (January when that value already passed the reporting threshold, else the month the cumulative value of the year passes it), whether the statistical value is required, and the monthly values. Answers 422 when no thresholds are stored for the year.
     *
     * @param LtIntrastatObligationDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIntrastatObligationDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIntrastatObligation(LtIntrastatObligationDeclarationsRequest $request, ?array $options = null): ?LtIntrastatObligationDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/intrastat/obligation",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIntrastatObligationDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the Lithuanian i.SAF register XML of a month: `dataType` F covers both registers, S the issued sale invoices only, P the registered purchase invoices only. Returns the XML without storing it; `declarations/submissions/create` stores it as a submission.
     *
     * @param LtIsafGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIsafGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIsafGenerate(LtIsafGenerateDeclarationsRequest $request, ?array $options = null): ?LtIsafGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/isaf/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIsafGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the fields of the Lithuanian VAT return FR0600 for the period of `months` months starting in `month`, with the breakdown by VAT classifier behind them. `deductionPercent` is the share of input VAT deducted and is written to field 28.
     *
     * @param LtFr0600ComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtFr0600ComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltFr0600Compute(LtFr0600ComputeDeclarationsRequest $request, ?array $options = null): ?LtFr0600ComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/fr0600/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtFr0600ComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes fields 5 to 7 of the monthly GPM313 from the payroll run of the month the pay was earned: the run of the previous month with `payoutTiming` `next-month`, the run of the same month with `same-month`. `paymentDay` decides whether the withheld tax goes to field 6 (paid by the 15th) or field 7 (after it). Fields 8 to 12 are returned as zero.
     *
     * @param LtGpm313ComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtGpm313ComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltGpm313Compute(LtGpm313ComputeDeclarationsRequest $request, ?array $options = null): ?LtGpm313ComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/gpm313/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtGpm313ComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the monthly SAM figures from the payroll run of the month: per employee the insured income, the employee and employer contributions together and the resulting tariff, plus the insured count and the totals. A missing run or a run still in draft is reported in the warnings.
     *
     * @param LtSamComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtSamComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltSamCompute(LtSamComputeDeclarationsRequest $request, ?array $options = null): ?LtSamComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/sam/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtSamComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the rows of the 1-SD (employment contracts that start in the date range) or of the 2-SD (contracts that ended in the range, with the final insured income and contributions from the payroll line of the termination month). Answers 422 when `fromDate` is after `toDate`.
     *
     * @param LtSdGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtSdGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltSdGenerate(LtSdGenerateDeclarationsRequest $request, ?array $options = null): ?LtSdGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/sd/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtSdGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the Lithuanian SAF-T (version 2.01) XML for a date range: `dataType` F is the full file, GL, SI, PI, PA, MG and AS limit it to the general ledger, sale invoices, purchase invoices, payments, movements of goods or asset transactions. Answers 422 when `fromDate` is after `toDate`. With `persist`, the file is stored and a submission for `lt-saft` is created.
     *
     * @param LtSaftGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtSaftGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltSaftGenerate(LtSaftGenerateDeclarationsRequest $request, ?array $options = null): ?LtSaftGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/saft/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtSaftGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds an i.VAZ amendment message for up to 100 issued waybills as TransportDocumentAmendment elements. `corrections` carries corrected values per waybill: `consigneePartnerId`, `unloadAddress`, `vehiclePlate`, `trailerPlate`, `driverName`, `driverSurname` (the last three can be cleared with null) and line `quantity` by line id; the message carries the waybill with them applied, and with `persist` they are also stored on the waybill. Answers 422 when the registration code of the company is not numeric, when a waybill is not issued, or when a correction names a waybill not in `waybillIds`, a waybill twice, a line not on its waybill or a consignee partner the company does not have. With `persist`, the file is stored and a submission for `lt-ivaz-amendment` is created.
     *
     * @param LtIvazAmendDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIvazAmendDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIvazAmend(LtIvazAmendDeclarationsRequest $request, ?array $options = null): ?LtIvazAmendDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/ivaz/amend",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIvazAmendDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds an i.VAZ cancellation message for up to 100 waybills, each with a cancellation reason code and optional additional information. Answers 422 when the registration code of the company is not numeric; a waybill that was never issued is reported in the warnings. With `persist`, the file is stored and a submission for `lt-ivaz-cancellation` is created.
     *
     * @param LtIvazCancelDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtIvazCancelDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltIvazCancel(LtIvazCancelDeclarationsRequest $request, ?array $options = null): ?LtIvazCancelDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/ivaz/cancel",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtIvazCancelDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the rows of the Lithuanian FR0564 report of a month from the issued sale invoices and credit notes with the `intra_eu_b2b` or `reverse_charge` scheme: one row per buyer VAT number of another Member State, with goods and services split by the type of the catalogue item. Invoices not in EUR and buyers without a valid EU VAT number are left out and named in the warnings; the triangular column is always zero.
     *
     * @param LtFr0564ComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtFr0564ComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltFr0564Compute(LtFr0564ComputeDeclarationsRequest $request, ?array $options = null): ?LtFr0564ComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/fr0564/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtFr0564ComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the rows of the annual GPM312 from the payroll runs of the payout months of the year (December of the previous year to November with `payoutTiming` `next-month`, January to December with `same-month`): one row per employee and payment type code, with the amount paid, the tax withheld and the rate applied.
     *
     * @param LtGpm312ComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtGpm312ComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltGpm312Compute(LtGpm312ComputeDeclarationsRequest $request, ?array $options = null): ?LtGpm312ComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/gpm312/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtGpm312ComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the boxes of the Lithuanian annual corporate income tax return PLN204 for the fiscal year from the financial statements and the tax adjustments recorded with `declarations/tax-adjustments/create`: the PLN204S annex from the `non_deductible` adjustments and the PLN204Z annex from the `non_taxable_income` ones, by their `code`. The small-entity rate is applied when the size criteria allow it. Answers 422 when such an adjustment has no code or a code the annex does not list, or when no rate table covers the period.
     *
     * @param LtPln204ComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtPln204ComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltPln204Compute(LtPln204ComputeDeclarationsRequest $request, ?array $options = null): ?LtPln204ComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/pln204/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtPln204ComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the Union OSS return of a quarter from the issued invoices and credit notes with the `oss_union` VAT scheme: one row per Member State of consumption and VAT rate, classified as standard or reduced, and a corrections section for the credit notes that credit invoices of earlier periods. Amounts are in EUR, converted at the official rate of the last day of the period. Answers 422 when the company is not established in the EU.
     *
     * @param EuOssComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuOssComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euOssCompute(EuOssComputeDeclarationsRequest $request, ?array $options = null): ?EuOssComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/oss/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuOssComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the IOSS return of a month from the issued invoices and credit notes with the `ioss` VAT scheme, with the same rows, corrections and EUR conversion as `declarations/eu/oss/compute`. Answers 422 when the company is not established in the EU.
     *
     * @param EuIossComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuIossComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euIossCompute(EuIossComputeDeclarationsRequest $request, ?array $options = null): ?EuIossComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/ioss/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuIossComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the monthly return of the special scheme for transfers of own goods from the warehouse transfers between warehouses in two different EU Member States: one row per destination and dispatch country with the cost of the goods as the taxable amount in EUR, the transfers behind the rows, and the due date. Answers 422 when the company is not established in the EU.
     *
     * @param EuOwnGoodsTransfersComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuOwnGoodsTransfersComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euOwnGoodsTransfersCompute(EuOwnGoodsTransfersComputeDeclarationsRequest $request, ?array $options = null): ?EuOwnGoodsTransfersComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/own-goods-transfers/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuOwnGoodsTransfersComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the transactions of a date range that fall under EU digital reporting: issued sale invoices and credit notes with the `intra_eu_b2b` or `reverse_charge` scheme to EU customers, and registered purchase invoices from suppliers in other Member States whose lines carry a self-assessed VAT classifier. Each transaction names the article it is reported under, the Member State it is reported to, its deadline and the data still missing. Answers 422 when the company is not identified for VAT in the EU.
     *
     * @param EuDigitalReportingListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuDigitalReportingListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euDigitalReportingList(EuDigitalReportingListDeclarationsRequest $request, ?array $options = null): ?EuDigitalReportingListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/digital-reporting/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuDigitalReportingListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Which platform sellers are reportable for the year (Council Directive (EU) 2021/514, Annex V; for a UK company, the HMRC digital platform reporting rules and the jurisdictions HMRC lists as reportable for the year) and why the others are excluded, the data still missing, and how the company files the report in its Member State or with HMRC.
     *
     * @param EuDac7PreviewDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuDac7PreviewDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euDac7Preview(EuDac7PreviewDeclarationsRequest $request, ?array $options = null): ?EuDac7PreviewDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/dac7/preview",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuDac7PreviewDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the DAC7 (DPI) XML report of a year for the Member State of the company, or the HMRC digital platform report (OECD DPI XML 1.0, file name equal to the MessageRefId) for a UK company, and returns it base64-encoded with the file name the administration expects. Answers 422 when no DAC7 filing channel exists for the company country. The sellers and the missing data behind it come from `declarations/eu/dac7/preview`.
     *
     * @param EuDac7XmlDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuDac7XmlDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euDac7Xml(EuDac7XmlDeclarationsRequest $request, ?array $options = null): ?EuDac7XmlDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/dac7/xml",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuDac7XmlDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Sums the cross-border sales to EU consumers (invoices under the `oss_union` scheme, and domestic-scheme invoices to partners without a VAT number in another Member State) of the current and the preceding calendar year as of `date` (default: the current date of the company) and compares both with the EUR 10 000 distance sales threshold.
     *
     * @param EuDistanceSalesThresholdGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuDistanceSalesThresholdGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euDistanceSalesThresholdGet(EuDistanceSalesThresholdGetDeclarationsRequest $request = new EuDistanceSalesThresholdGetDeclarationsRequest(), ?array $options = null): ?EuDistanceSalesThresholdGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/distance-sales-threshold/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuDistanceSalesThresholdGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Sums the turnover of the company within the Union (issued invoices and credit notes other than export and out-of-scope supplies) for the current and the previous calendar year as of `date` (default: the current date of the company) and compares it with the EUR 100 000 cap of the cross-border SME scheme. The status is `not_applicable` for a registered VAT payer, otherwise `below`, `approaching` or `exceeded`.
     *
     * @param EuUnionTurnoverGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuUnionTurnoverGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euUnionTurnoverGet(EuUnionTurnoverGetDeclarationsRequest $request = new EuUnionTurnoverGetDeclarationsRequest(), ?array $options = null): ?EuUnionTurnoverGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/union-turnover/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuUnionTurnoverGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the quarterly report of the cross-border SME scheme: the value of the issued supplies within the Union per Member State of supply (the VAT country of the invoice, else the country of the partner, else the home country), in the base currency of the company. Supplies that resolve to a non-EU country are left out and named in the warnings.
     *
     * @param EuSmeCrossBorderReportComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuSmeCrossBorderReportComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euSmeCrossBorderReportCompute(EuSmeCrossBorderReportComputeDeclarationsRequest $request, ?array $options = null): ?EuSmeCrossBorderReportComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-cross-border-report/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuSmeCrossBorderReportComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Returns the stored table of national SME VAT exemption thresholds per Member State, with sector thresholds and intra-EU acquisition triggers where recorded, and the national and Union-wide caps of the directive. No company data is read.
     *
     * @param EuSmeThresholdsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuSmeThresholdsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euSmeThresholdsList(EuSmeThresholdsListDeclarationsRequest $request = new EuSmeThresholdsListDeclarationsRequest(), ?array $options = null): ?EuSmeThresholdsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-thresholds/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuSmeThresholdsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Compares the gross turnover of the company in the current calendar year as of `date` (default: the current date of the company) with the national SME exemption threshold of its country. The status is `not_applicable` for a registered VAT payer, `unknown` when no threshold is on file or its currency differs from the base currency, otherwise `below`, `approaching` or `exceeded`; when the country has an intra-EU acquisitions trigger, the acquisitions from and services to other Member States are compared with it too.
     *
     * @param EuSmeThresholdGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuSmeThresholdGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euSmeThresholdGet(EuSmeThresholdGetDeclarationsRequest $request = new EuSmeThresholdGetDeclarationsRequest(), ?array $options = null): ?EuSmeThresholdGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/sme-threshold/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuSmeThresholdGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the national VAT return forms Nordlet can compute, with the country, form key, form name, filing frequency and source.
     *
     * @param EuVatReturnPacksListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuVatReturnPacksListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euVatReturnPacksList(EuVatReturnPacksListDeclarationsRequest $request = new EuVatReturnPacksListDeclarationsRequest(), ?array $options = null): ?EuVatReturnPacksListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/vat-return/packs/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuVatReturnPacksListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes the national VAT return of `countryCode` for the period of `months` months starting in `month`, as the numbered boxes of the form with labels and amounts. Answers 422 when no return pack is registered for the country; the packs are listed by `declarations/eu/vat-return/packs/list`.
     *
     * @param EuVatReturnComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EuVatReturnComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function euVatReturnCompute(EuVatReturnComputeDeclarationsRequest $request, ?array $options = null): ?EuVatReturnComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/eu/vat-return/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EuVatReturnComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate the Polish JPK_V7M(3) file (VAT declaration with evidence) for a month, per the MF schema in force since February 2026. Amounts must already be in PLN; rows are marked BFK until a KSeF integration supplies invoice numbers. Review the warnings before submitting via e-dokumenty.mf.gov.pl.
     *
     * @param PlJpkV7MGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlJpkV7MGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plJpkV7MGenerate(PlJpkV7MGenerateDeclarationsRequest $request, ?array $options = null): ?PlJpkV7MGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/jpk-v7m/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlJpkV7MGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the rows of the Polish recapitulative statement VAT-UE for a month: section C intra-Community supplies of goods, section D intra-Community acquisitions, section E services taxed where the customer is established. Amounts are full złoty per counterparty. The VAT-UE(5) file itself goes out from the EU sales list deadline in the calendar.
     *
     * @param PlVatUeGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlVatUeGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plVatUeGenerate(PlVatUeGenerateDeclarationsRequest $request, ?array $options = null): ?PlVatUeGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/vat-ue/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlVatUeGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the rows of the Polish INTRASTAT declaration for a month, arrivals or dispatches, grouped by CN code, partner country, country of origin, partner VAT number, nature of transaction, transport and delivery terms. Values are whole złoty converted at the invoice rate; credit notes with goods lines are returns (code 21). Goods without a CN code are left out and named in the warnings. The IST message itself goes out from the Intrastat deadline in the calendar.
     *
     * @param PlIntrastatGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlIntrastatGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plIntrastatGenerate(PlIntrastatGenerateDeclarationsRequest $request, ?array $options = null): ?PlIntrastatGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/intrastat/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlIntrastatGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * List the invoices KSeF holds for this company as the buyer, for a window of acquisition timestamps. Each row carries the KSeF number and, when the document number matches a registered purchase invoice, the invoice it belongs to.
     *
     * @param PlKsefReceivedListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlKsefReceivedListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plKsefReceivedList(PlKsefReceivedListDeclarationsRequest $request, ?array $options = null): ?PlKsefReceivedListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/ksef/received/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlKsefReceivedListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Read one invoice out of KSeF by its national number. With a purchase invoice given, the KSeF number is written onto that invoice, which is what makes the purchase row of JPK_V7M carry NrKSeF instead of the BFK marker.
     *
     * @param PlKsefReceivedFetchDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlKsefReceivedFetchDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plKsefReceivedFetch(PlKsefReceivedFetchDeclarationsRequest $request, ?array $options = null): ?PlKsefReceivedFetchDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/ksef/received/fetch",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlKsefReceivedFetchDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The UPO for a KSeF session. KSeF issues one receipt per session rather than per invoice, so the session reference number from the send is what identifies it.
     *
     * @param PlKsefReceiptDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlKsefReceiptDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plKsefReceipt(PlKsefReceiptDeclarationsRequest $request = new PlKsefReceiptDeclarationsRequest(), ?array $options = null): ?PlKsefReceiptDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/ksef/receipt",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlKsefReceiptDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The differences between the accounting result and the taxable profit: non-deductible expenses, income added to or left out of the tax base, extra deductible expenses, donations, losses carried forward, reliefs and tax credits. The annual corporate income tax return is built from them.
     *
     * @param TaxAdjustmentsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxAdjustmentsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxAdjustmentsList(TaxAdjustmentsListDeclarationsRequest $request, ?array $options = null): ?TaxAdjustmentsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-adjustments/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxAdjustmentsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Records a tax adjustment of one kind for a tax year, with an optional form `code`. Answers 422 when the amount is zero.
     *
     * @param TaxAdjustmentsCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxAdjustmentsCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxAdjustmentsCreate(TaxAdjustmentsCreateDeclarationsRequest $request, ?array $options = null): ?TaxAdjustmentsCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-adjustments/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxAdjustmentsCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Changes the kind, code, amount or description of a recorded tax adjustment; fields left out keep their value and an empty `code` clears it. Answers 422 when the new amount is zero.
     *
     * @param TaxAdjustmentsUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxAdjustmentsUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxAdjustmentsUpdate(TaxAdjustmentsUpdateDeclarationsRequest $request, ?array $options = null): ?TaxAdjustmentsUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-adjustments/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxAdjustmentsUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a recorded tax adjustment.
     *
     * @param TaxAdjustmentsDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxAdjustmentsDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxAdjustmentsDelete(TaxAdjustmentsDeleteDeclarationsRequest $request, ?array $options = null): ?TaxAdjustmentsDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-adjustments/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxAdjustmentsDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * What the company has paid the administration towards a tax before the return is filed: payments on account, tax withheld at source by others, a final settlement, and a refund received. Returns report these on their own lines, so the amount they ask for is the balance.
     *
     * @param TaxPaymentsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxPaymentsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxPaymentsList(TaxPaymentsListDeclarationsRequest $request, ?array $options = null): ?TaxPaymentsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-payments/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxPaymentsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Records a payment made towards a tax (`tax`) of a year, and of a month when given, as an advance payment, tax withheld by others, a final settlement or a refund received. Answers 422 when the amount is zero.
     *
     * @param TaxPaymentsCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxPaymentsCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxPaymentsCreate(TaxPaymentsCreateDeclarationsRequest $request, ?array $options = null): ?TaxPaymentsCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-payments/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxPaymentsCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Changes the kind, amount, payment date, reference or description of a recorded tax payment; fields left out keep their value and an empty `reference` clears it. Answers 422 when the new amount is zero, and 409 when the kind or amount of a payment booked from a bank transaction (`bank/transactions/post`) changes.
     *
     * @param TaxPaymentsUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxPaymentsUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxPaymentsUpdate(TaxPaymentsUpdateDeclarationsRequest $request, ?array $options = null): ?TaxPaymentsUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-payments/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxPaymentsUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a recorded tax payment. Answers 409 when the payment is booked from a bank transaction (`bank/transactions/post`).
     *
     * @param TaxPaymentsDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?TaxPaymentsDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function taxPaymentsDelete(TaxPaymentsDeleteDeclarationsRequest $request, ?array $options = null): ?TaxPaymentsDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/tax-payments/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return TaxPaymentsDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Sets the provisional pro-rata percentage of the company for a fiscal year (the year in which it ends, by the company's fiscal year end month). Purchase lines on a VAT type marked pro-rata (`prorata`) deduct that share of their VAT, book the rest into the line's expense, and the VAT returns declare only the deductible part. Without a percentage for the year such a line deducts 100 % and `purchases/invoices/register` answers the warning `prorata_not_set`. Setting it again replaces the percentage for documents registered afterwards; documents already registered are not changed and the year-end adjustment is not built.
     *
     * @param VatProrataSetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?VatProrataSetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function vatProrataSet(VatProrataSetDeclarationsRequest $request, ?array $options = null): ?VatProrataSetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/vat-prorata/set",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return VatProrataSetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Answers the percentage set with `declarations/vat-prorata/set` for the fiscal year; 404 when none is set.
     *
     * @param VatProrataGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?VatProrataGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function vatProrataGet(VatProrataGetDeclarationsRequest $request, ?array $options = null): ?VatProrataGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/vat-prorata/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return VatProrataGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the percentages set with `declarations/vat-prorata/set`, oldest fiscal year first.
     *
     * @param VatProrataListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?VatProrataListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function vatProrataList(VatProrataListDeclarationsRequest $request = new VatProrataListDeclarationsRequest(), ?array $options = null): ?VatProrataListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/vat-prorata/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return VatProrataListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Whether the general meeting adopted the annual accounts and on which date, the date the accounts were prepared, and which directors signed them. The annual accounts filed with the trade register are built from these facts.
     *
     * @param AnnualAccountsGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsGet(AnnualAccountsGetDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Creates or replaces the record of a year: whether and when the accounts were adopted, when they were prepared, whether they were audited (with the qualification flag and the auditor report date) or the auditor was not elected, the report texts and the appropriation of the result. Answers 422 when `adopted` is true without `adoptionDate`, when the adoption date is not after 31 December of the year, or when the date of preparation is after the adoption date.
     *
     * @param AnnualAccountsSetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsSetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsSet(AnnualAccountsSetDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsSetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/set",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsSetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Adds a director to the signatures of the annual accounts of the year: signed, with the date and place of signature, or not signed, with the reason. Answers 422 when no annual accounts record exists for the year (`declarations/annual-accounts/set` first), when a signed entry lacks the date or the place, or when an unsigned entry lacks the reason.
     *
     * @param AnnualAccountsSignaturesCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsSignaturesCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsSignaturesCreate(AnnualAccountsSignaturesCreateDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsSignaturesCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/signatures/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsSignaturesCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Replaces the name, type and signing facts of a recorded director signature. Answers 422 when a signed entry lacks the date or the place of signature, or when an unsigned entry lacks the reason.
     *
     * @param AnnualAccountsSignaturesUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsSignaturesUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsSignaturesUpdate(AnnualAccountsSignaturesUpdateDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsSignaturesUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/signatures/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsSignaturesUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a recorded director signature.
     *
     * @param AnnualAccountsSignaturesDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsSignaturesDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsSignaturesDelete(AnnualAccountsSignaturesDeleteDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsSignaturesDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/signatures/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsSignaturesDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Adds a profit distribution decision (decision date, kind, amount, description) to the annual accounts record of the year. Answers 422 when no annual accounts record exists for the year.
     *
     * @param AnnualAccountsDistributionsCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsDistributionsCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsDistributionsCreate(AnnualAccountsDistributionsCreateDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsDistributionsCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/distributions/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsDistributionsCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Replaces the decision date, kind, amount and description of a recorded profit distribution.
     *
     * @param AnnualAccountsDistributionsUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsDistributionsUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsDistributionsUpdate(AnnualAccountsDistributionsUpdateDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsDistributionsUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/distributions/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsDistributionsUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a recorded profit distribution.
     *
     * @param AnnualAccountsDistributionsDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsDistributionsDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsDistributionsDelete(AnnualAccountsDistributionsDeleteDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsDistributionsDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/distributions/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsDistributionsDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Links a file uploaded through files/upload (its storageKey) to the annual accounts of the year as the notes, the management report, the auditor statement, the profit appropriation resolution, the approval certificate, the general data sheet, the full report as a pdf, or another document. Deposits that must carry these documents take them from here.
     *
     * @param AnnualAccountsAttachmentsAddDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsAttachmentsAddDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsAttachmentsAdd(AnnualAccountsAttachmentsAddDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsAttachmentsAddDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/attachments/add",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsAttachmentsAddDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Removes the attachment from the annual accounts and deletes its file record and the stored bytes.
     *
     * @param AnnualAccountsAttachmentsDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AnnualAccountsAttachmentsDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function annualAccountsAttachmentsDelete(AnnualAccountsAttachmentsDeleteDeclarationsRequest $request, ?array $options = null): ?AnnualAccountsAttachmentsDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/annual-accounts/attachments/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AnnualAccountsAttachmentsDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Compute the company income tax return TD4 of a tax year from the ledger and the recorded tax adjustments: the accounting profit, the add-backs, deductions, capital allowances and losses brought forward, the chargeable income, the corporation tax at the rate of the year and the double tax relief, as the fields the company keys into TAXISnet or Tax For All. The Tax Department publishes no upload layout for the TD4; the XML is a working file.
     *
     * @param CyTd4GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CyTd4GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function cyTd4Generate(CyTd4GenerateDeclarationsRequest $request, ?array $options = null): ?CyTd4GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/cy/td4/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CyTd4GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the annual return HE32 of a year: the figures the Registrar’s e-filing screens ask for (company number, registered office, made-up-to date, share capital, register of members, directors and secretary, annual general meeting date, the accounts summary), the working file, and the printed form HE32(I) filled in as a PDF for signing and for keying into the Registrar’s system, which takes the return only through its own screens.
     *
     * @param CyHe32GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CyHe32GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function cyHe32Generate(CyHe32GenerateDeclarationsRequest $request, ?array $options = null): ?CyHe32GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/cy/he32/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CyHe32GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build one of the German returns that ELSTER accepts only through a licensed ERiC transmission (E-Bilanz, Körperschaftsteuer, Gewerbesteuer with its Zerlegungserklärung, annual VAT return, Lohnsteuer-Anmeldung, Lohnsteuerbescheinigung) for the company to send through its own ELSTER-capable program, or the Anlage EÜR with the Anlage AVEÜR of a cash-basis company as a UTF-8 CSV file of its Zeilen and Kennzahlen (`de-euer`, 422 for a company without the cash-basis flag). The period is the year, or YYYY-MM for the monthly Lohnsteuer-Anmeldung.
     *
     * @param DeReturnsGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeReturnsGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deReturnsGenerate(DeReturnsGenerateDeclarationsRequest $request, ?array $options = null): ?DeReturnsGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/returns/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeReturnsGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Anlage EÜR and the Anlage AVEÜR of a year for a company that determines its profit on a cash basis (§ 4 Abs. 3 EStG), as the Zeilen and Kennzahlen of the official 2025 forms with their amounts: the receipts and payments of the year from the invoice payments (each payment split over the lines of its invoice), the payroll and tax payments and the journal transactions on cash and bank accounts, and the asset register for the Anlage AVEÜR and the AfA. Accounts are placed on the Zeilen through the de-euer statement scheme (Account → Statement rows). Refused with 422 for a company without the cash-basis flag.
     *
     * @param DeEuerGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeEuerGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deEuerGet(DeEuerGetDeclarationsRequest $request, ?array $options = null): ?DeEuerGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/euer/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeEuerGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The facts of one year that the German annual returns (Körperschaftsteuer, Gewerbesteuer, Umsatzsteuererklärung) need and the ledger does not hold: changes of shareholders, contracts with shareholders, the tax contribution account, loss carry-back, the donation carry-forward, the business premises with the municipalities for the apportionment of the trade tax, the land values or property tax and the participations for the trade tax additions and reductions, the foreign income per country for the Anlage AESt, the date of leaving the small-business scheme, the Anlage UN answers of a company seated abroad and, for a cash-basis company, the kind of income and the withdrawals and contributions of the owner for the Anlage EÜR. A key that is absent has not been answered.
     *
     * @param DeReturnFactsGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeReturnFactsGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deReturnFactsGet(DeReturnFactsGetDeclarationsRequest $request, ?array $options = null): ?DeReturnFactsGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/return-facts/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeReturnFactsGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Replace the facts of one year for the German annual returns. The returns built afterwards read them; a key left out stays unanswered.
     *
     * @param DeReturnFactsSetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeReturnFactsSetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deReturnFactsSet(DeReturnFactsSetDeclarationsRequest $request, ?array $options = null): ?DeReturnFactsSetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/return-facts/set",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeReturnFactsSetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the DEÜV notifications of a month (Anmeldung for every start, Abmeldung for every leaving, in December the Jahresmeldung for everyone employed on 31 December) as DSME records with the DBME, DBNA, DBGB and DBAN blocks of Anlage 4 in force from 2026, from the approved payroll runs and the employee record, for the company's own transmission channel.
     *
     * @param DeDeuevGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeDeuevGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deDeuevGenerate(DeDeuevGenerateDeclarationsRequest $request, ?array $options = null): ?DeDeuevGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/deuev/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeDeuevGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the monthly contribution statement to the health insurers (Beitragsnachweis) from the payroll run: one fixed-length record BW02 per insurer, in the record layout in force from 2026, ready for the company's own transmission channel.
     *
     * @param DeBeitragsnachweisGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DeBeitragsnachweisGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function deBeitragsnachweisGenerate(DeBeitragsnachweisGenerateDeclarationsRequest $request, ?array $options = null): ?DeBeitragsnachweisGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/de/beitragsnachweis/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DeBeitragsnachweisGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Compute the oplysningsskema for selskaber (selskabsselvangivelsen) of an income year from the ledger and the recorded tax adjustments: accounting result before tax, tax adjustments, losses carried forward, taxable income, the 22 % corporation tax, reliefs and the balance, as the rubrikker the company keys into TastSelv Selskabsskat (DIAS). Skatteforvaltningen publishes no file format for the return; the XML is a working file.
     *
     * @param DkSelskabsskatGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?DkSelskabsskatGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function dkSelskabsskatGenerate(DkSelskabsskatGenerateDeclarationsRequest $request, ?array $options = null): ?DkSelskabsskatGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/dk/selskabsskat/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return DkSelskabsskatGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Send one employment register (töötamise register) entry for an employment contract to e-MTA over X-tee: the start of work, or its end with the reason recorded on the contract.
     *
     * @param EeEmploymentRegisterSendDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EeEmploymentRegisterSendDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function eeEmploymentRegisterSend(EeEmploymentRegisterSendDeclarationsRequest $request, ?array $options = null): ?EeEmploymentRegisterSendDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ee/employment-register/send",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EeEmploymentRegisterSendDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Nordlet's declaración responsable for its VERI*FACTU invoicing system (Orden HAC/1177/2024, art. 15), as a PDF and as plain text.
     *
     * @param EsVerifactuDeclaracionResponsableDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?EsVerifactuDeclaracionResponsableDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function esVerifactuDeclaracionResponsable(EsVerifactuDeclaracionResponsableDeclarationsRequest $request = new EsVerifactuDeclaracionResponsableDeclarationsRequest(), ?array $options = null): ?EsVerifactuDeclaracionResponsableDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/es/verifactu/declaracion-responsable",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return EsVerifactuDeclaracionResponsableDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the Form CT1 of an accounting year as the ROS version 26 XML and the accompanying financial statements as inline XBRL on the FRS 102 Irish Extension 2026 taxonomy Revenue accepts, both from the ledger, the recorded tax adjustments, the annual accounts record and the officers, for upload through the company’s own ROS account. Says whether the company is above the iXBRL deferral limits (balance sheet total €4.4 million, turnover €8.8 million, 50 employees).
     *
     * @param IeCt1GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?IeCt1GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ieCt1Generate(IeCt1GenerateDeclarationsRequest $request, ?array $options = null): ?IeCt1GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ie/ct1/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return IeCt1GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the working paper for the Form B1 annual return of a financial year - company details, registered office, directors and secretary from Account → Officers, the members from Account → Shareholders, the issued share capital and the figures of the financial statements - in the order the CORE screens ask for them. The CRO publishes no file format for the B1, so it is keyed into CORE.
     *
     * @param IeB1GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?IeB1GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ieB1Generate(IeB1GenerateDeclarationsRequest $request, ?array $options = null): ?IeB1GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ie/b1/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return IeB1GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the TD16-TD19 integration document for a registered purchase invoice and send it to the Sistema di Interscambio. Since July 2022 a purchase from a supplier established abroad is reported this way instead of the esterometro. The Italian VAT rate to self-assess is a judgement about the supply: pass vatRatePercent unless the purchase lines already carry it, otherwise the request is refused rather than guessed.
     *
     * @param ItSdiPurchaseSendDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ItSdiPurchaseSendDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function itSdiPurchaseSend(ItSdiPurchaseSendDeclarationsRequest $request, ?array $options = null): ?ItSdiPurchaseSendDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/it/sdi/purchase-send",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ItSdiPurchaseSendDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Render the TD16-TD19 integration document for a registered purchase invoice without sending it, so the rate and the document type can be checked first.
     *
     * @param ItSdiPurchasePreviewDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ItSdiPurchasePreviewDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function itSdiPurchasePreview(ItSdiPurchasePreviewDeclarationsRequest $request, ?array $options = null): ?ItSdiPurchasePreviewDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/it/sdi/purchase-preview",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ItSdiPurchasePreviewDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Upload the SAF-T file to i.SAF-T over the iSAFTUploaderService web service and start its processing. The file, the case reference and the status are kept as a declaration submission (submissionId), whose outcome Nordlet then checks with i.SAF-T. The submission itself is confirmed separately, because after confirmation the file can no longer be corrected. A range and data type already sent is sent again only with amend: true.
     *
     * @param LtSaftSendDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtSaftSendDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltSaftSend(LtSaftSendDeclarationsRequest $request, ?array $options = null): ?LtSaftSendDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/saft/send",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtSaftSendDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Render the Sodra 1-SD or 2-SD notice for the contracts starting or ending in the range as an .ffdata document for EDAS.
     *
     * @param LtSdFfdataDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtSdFfdataDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltSdFfdata(LtSdFfdataDeclarationsRequest $request, ?array $options = null): ?LtSdFfdataDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/sd/ffdata",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtSdFfdataDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Render the annual corporate income tax return PLN204 as an .ffdata document, including the PLN204S and PLN204Z annexes, from the ledger and the tax adjustments recorded for that year.
     *
     * @param LtPln204FfdataDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LtPln204FfdataDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function ltPln204Ffdata(LtPln204FfdataDeclarationsRequest $request, ?array $options = null): ?LtPln204FfdataDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/lt/pln204/ffdata",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LtPln204FfdataDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Compute the company income tax return and self-assessment of a year of assessment from the ledger and the recorded tax adjustments: the accounting profit before tax, the add-backs and deductions, the approved donations, capital allowances and losses carried forward, the chargeable income, the 35 % charge, the relief against the tax and the allocation of the distributable profit to the five tax accounts. The Malta Tax and Customs Administration issues the return as a personalised spreadsheet to the registered tax practitioner and publishes no layout, so the XML is a working file and the figures are keyed into that spreadsheet.
     *
     * @param MtCompanyTaxGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MtCompanyTaxGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mtCompanyTaxGenerate(MtCompanyTaxGenerateDeclarationsRequest $request, ?array $options = null): ?MtCompanyTaxGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/mt/company-tax/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return MtCompanyTaxGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the annual return of a year: the company number, registered office and made-up-to date, the share capital, the register of members, the directors and the company secretary and the accounts summary, as the figures the Malta Business Registry asks for on its own screens, plus the printed Annual Return Form of the Seventh Schedule filled in as a PDF for signing.
     *
     * @param MtAnnualReturnGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?MtAnnualReturnGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function mtAnnualReturnGenerate(MtAnnualReturnGenerateDeclarationsRequest $request, ?array $options = null): ?MtAnnualReturnGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/mt/annual-return/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return MtAnnualReturnGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate JPK_FA(4), the on-demand structure with every sales invoice issued in a period, its VAT bases per rate and one row per invoice line. Filed only when the tax office asks for it.
     *
     * @param PlJpkFaGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlJpkFaGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plJpkFaGenerate(PlJpkFaGenerateDeclarationsRequest $request, ?array $options = null): ?PlJpkFaGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/jpk-fa/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlJpkFaGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate JPK_KR(1), the on-demand structure with the chart of accounts and its opening balances and turnover, the journal and the double entries behind it. Filed only when the tax office asks for it.
     *
     * @param PlJpkKrGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlJpkKrGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plJpkKrGenerate(PlJpkKrGenerateDeclarationsRequest $request, ?array $options = null): ?PlJpkKrGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/jpk-kr/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlJpkKrGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate JPK_MAG(2), the on-demand structure with the warehouse documents of one warehouse: goods received from outside (PZ) or internally (PW) and issued to a customer (WZ) or internally (RW). Filed only when the tax office asks for it.
     *
     * @param PlJpkMagGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlJpkMagGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plJpkMagGenerate(PlJpkMagGenerateDeclarationsRequest $request, ?array $options = null): ?PlJpkMagGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/jpk-mag/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlJpkMagGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate PIT-11(29) for every person on the payroll of one year: the pay, the deductible costs, the advance withheld and the social and health contributions taken off it. One document per person, because that is how the form is filed, addressed to the tax office of the place of residence of that person (employee field plKodUrzedu); a person without that code is refused with 422.
     *
     * @param PlPit11GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlPit11GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plPit11Generate(PlPit11GenerateDeclarationsRequest $request, ?array $options = null): ?PlPit11GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/pit-11/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlPit11GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Generate CIT-8(34), the annual corporate income tax return, from the ledger of the year and the recorded tax adjustments. The tax office code and the small-taxpayer setting come from the e-Deklaracje compliance settings, the seat address from the JPK gateway settings. Names the annexes the figures would need, which are not produced. Answers 422 for a tax year that starts before 2025-01-01, which the CIT-8(34) schema does not accept.
     *
     * @param PlCit8GenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlCit8GenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plCit8Generate(PlCit8GenerateDeclarationsRequest $request, ?array $options = null): ?PlCit8GenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/cit-8/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlCit8GenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Compute the monthly ZUS DRA settlement from the payroll run of one month: the pension, disability, sickness, accident and health insurance contributions and the Labour Fund, Solidarity Fund and guaranteed benefits fund charges, each split between the insured person and the payer. The amounts are carried into Płatnik or ePłatnik by hand.
     *
     * @param PlZusDraComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlZusDraComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plZusDraCompute(PlZusDraComputeDeclarationsRequest $request, ?array $options = null): ?PlZusDraComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/zus-dra/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlZusDraComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the KEDU file for one month: the ZUS DRA settlement and one ZUS RCA report per person on the payroll, in the schema kedu_5_4 that Płatnik and ePłatnik import. The payer REGON, short name and declaration deadline code come from the ZUS compliance settings; the insurance title code and working time of each person from the employee record.
     *
     * @param PlZusDraKeduDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlZusDraKeduDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plZusDraKedu(PlZusDraKeduDeclarationsRequest $request, ?array $options = null): ?PlZusDraKeduDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/zus-dra/kedu",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlZusDraKeduDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Fill the published ZUS DRA form for one month and return it as a PDF. The amounts, the payer identity and the deadline code are the same ones the KEDU file carries; blocks the payroll does not hold (paid benefits, bridging pensions, income declaration of a self-paying person) stay empty.
     *
     * @param PlZusDraPdfDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?PlZusDraPdfDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function plZusDraPdf(PlZusDraPdfDeclarationsRequest $request, ?array $options = null): ?PlZusDraPdfDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/pl/zus-dra/pdf",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return PlZusDraPdfDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the RO e-Transport declaration for an issued waybill: goods with their tariff codes and masses, the commercial partner, the route and the vehicle. The XML follows the ANAF eTransport v2 schema and is kept as a file on the waybill. Anything listed in blockers has to be filled in before /etransport/send will accept it.
     *
     * @param RoEtransportBuildDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoEtransportBuildDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function roEtransportBuild(RoEtransportBuildDeclarationsRequest $request, ?array $options = null): ?RoEtransportBuildDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ro/etransport/build",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RoEtransportBuildDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Hand the RO e-Transport declaration for an issued waybill to ANAF under the SPV OAuth token in compliance settings, and return the upload index the UIT is read back with. Answers 422 while any field the ANAF validator requires is still missing.
     *
     * @param RoEtransportSubmitDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoEtransportSubmitDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function roEtransportSubmit(RoEtransportSubmitDeclarationsRequest $request, ?array $options = null): ?RoEtransportSubmitDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ro/etransport/submit",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RoEtransportSubmitDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Read the outcome of an e-Transport declaration from ANAF by its upload index, under the SPV OAuth token in compliance settings. Returns the UIT code once the declaration validates.
     *
     * @param RoEtransportStatusDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?RoEtransportStatusDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function roEtransportStatus(RoEtransportStatusDeclarationsRequest $request, ?array $options = null): ?RoEtransportStatusDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/ro/etransport/status",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return RoEtransportStatusDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the annual wage declaration (Lohndeklaration) to the AHV-IV-FAK from the approved payroll runs of the year as the CSV that AHVeasy imports under Lohndeklaration → CSV-Import der Lohndaten: one row per employee with the 18 columns of the AHVeasy template, the AHV-liable wage and the ALV wage.
     *
     * @param LiLohndeklarationGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LiLohndeklarationGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function liLohndeklarationGenerate(LiLohndeklarationGenerateDeclarationsRequest $request, ?array $options = null): ?LiLohndeklarationGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/li/lohndeklaration/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LiLohndeklarationGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Build the annual wage list (Lohnliste) of a Liechtenstein employer from the approved payroll runs of the year as the XLSX file the tax administration's eLohnausweis / eLohnlisten application imports: one row per employee with PEID, name, birth date, address, gross wage, wage tax withheld and the settlement period.
     *
     * @param LiLohnlistenGenerateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?LiLohnlistenGenerateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function liLohnlistenGenerate(LiLohnlistenGenerateDeclarationsRequest $request, ?array $options = null): ?LiLohnlistenGenerateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/li/lohnlisten/generate",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return LiLohnlistenGenerateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Starts connecting the company to HMRC's VAT (MTD) API: returns the HMRC sign-in address the user opens in the browser to grant Nordlet the `read:vat` and `write:vat` scopes. HMRC sends the browser back to Nordlet's registered address with `code` and `state`, which are passed to `declarations/gb/hmrc/connect`. Answers 503 when Nordlet's HMRC application is not set up.
     *
     * @param GbHmrcAuthorizeUrlGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbHmrcAuthorizeUrlGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbHmrcAuthorizeUrlGet(GbHmrcAuthorizeUrlGetDeclarationsRequest $request = new GbHmrcAuthorizeUrlGetDeclarationsRequest(), ?array $options = null): ?GbHmrcAuthorizeUrlGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/hmrc/authorize-url/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbHmrcAuthorizeUrlGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Finishes connecting the company to HMRC: trades the `code` HMRC returned for the company's tokens and stores them in the `gb-hmrc-vat` settings. `state` must be the one of the sign-in address from `declarations/gb/hmrc/authorize-url/get`, else 422. HMRC lets the connection last 18 months; Nordlet renews the 4-hour access token itself.
     *
     * @param GbHmrcConnectDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbHmrcConnectDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbHmrcConnect(GbHmrcConnectDeclarationsRequest $request, ?array $options = null): ?GbHmrcConnectDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/hmrc/connect",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbHmrcConnectDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Computes UK Corporation Tax for an accounting period of at most 12 months from its taxable total profits: the small profits rate when the augmented profits (taxable total profits plus `exemptDistributions`) do not exceed the lower limit, the main rate less marginal relief between the limits, the main rate above the upper limit. The limits are reduced by days for a period shorter than 12 months and divided by one plus `associatedCompanies` (those that carried on a trade or business in the period). A period that straddles 1 April of a year whose limits differ is split into parts by financial year. A `closeInvestmentHolding` company pays the main rate. Financial years 2022 to 2026 are known; another answers 422.
     *
     * @param GbCorporationTaxComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbCorporationTaxComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbCorporationTaxCompute(GbCorporationTaxComputeDeclarationsRequest $request, ?array $options = null): ?GbCorporationTaxComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/corporation-tax/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbCorporationTaxComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The facts of one accounting period that the Company Tax Return (CT600) and its computations need and the ledger does not hold: the company type (box 4), the associated companies, the small companies regime and the section 477 audit exemption of the accounts, the tax adjustments to the profit per the accounts, the capital allowances and balancing charges, the trading losses brought forward, the chargeable gains, the qualifying donations, the tax already paid, the declarant and the senior statutory auditor who signed the auditor’s report. The annual accounts to Companies House read the small companies regime, the section 477 audit exemption and the senior statutory auditor too. `year` is the fiscal year by the year in which it ends. A key that is absent has not been answered.
     *
     * @param GbReturnFactsGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbReturnFactsGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbReturnFactsGet(GbReturnFactsGetDeclarationsRequest $request, ?array $options = null): ?GbReturnFactsGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/return-facts/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbReturnFactsGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Replace the facts of one accounting period for the Company Tax Return. The `gb-ct-return` and `gb-annual-accounts` filings built afterwards read them; a key left out stays unanswered.
     *
     * @param GbReturnFactsSetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbReturnFactsSetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbReturnFactsSet(GbReturnFactsSetDeclarationsRequest $request, ?array $options = null): ?GbReturnFactsSetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/return-facts/set",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbReturnFactsSetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Records a benefit or expense of an employee that is not taxed through the payroll, for the P11D of the tax year that starts on 6 April of `taxYear`. `item.type` chooses the P11D section (A `asset-transferred`; B `payment`, `tax-on-notional-payments`; C `vouchers-or-credit-cards`; D `living-accommodation`; E `mileage-allowance`; F `car`; G `vans`; H `loan`; I `medical`; J `relocation`; K `services`; L `asset-available`; M `other-class-1a`, `other-non-class-1a`, `tax-paid-not-deducted`; N `expenses-travel-and-subsistence`, `expenses-entertainment`, `expenses-home-telephone`, `expenses-non-qualifying-relocation`, `expenses-other`). Amounts are the cash equivalents the employer works out; for a cost item the cash equivalent is the cost less the amount made good. The `gb-p11db` filing sends these P11Ds with the P11D(b), whose total benefit adds the items liable to Class 1A. Answers 422 for a rule of HMRC's business rules the item breaks and 409 for a second item of a kind HMRC takes once per employee.
     *
     * @param GbP11DItemsCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbP11DItemsCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbP11DItemsCreate(GbP11DItemsCreateDeclarationsRequest $request, ?array $options = null): ?GbP11DItemsCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/p11d/items/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbP11DItemsCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the P11D items of a tax year, optionally of one employee, with their section, cash equivalent and whether they count for Class 1A.
     *
     * @param GbP11DItemsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbP11DItemsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbP11DItemsList(GbP11DItemsListDeclarationsRequest $request, ?array $options = null): ?GbP11DItemsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/p11d/items/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbP11DItemsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Deletes a P11D item.
     *
     * @param GbP11DItemsDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbP11DItemsDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbP11DItemsDelete(GbP11DItemsDeleteDeclarationsRequest $request, ?array $options = null): ?GbP11DItemsDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/p11d/items/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbP11DItemsDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Gives the P45 figures of an employee who has left (`terminationDate` set): the employer PAYE reference, the employee's National Insurance number, name, leaving date, payroll number, gender, date of birth and address, whether Student Loan deductions are to continue, the tax code at the leaving date with the Week 1/Month 1 mark, and the pay and tax of the tax year of the leaving date from the approved payroll runs. With a cumulative code the totals are the last entries of box 7 with the tax week or month of the last payment; with a Week 1/Month 1 code they are this employment's pay and tax of box 8. Nordlet does not print the P45 form.
     *
     * @param GbP45GetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbP45GetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbP45Get(GbP45GetDeclarationsRequest $request, ?array $options = null): ?GbP45GetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/p45/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbP45GetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the company's VAT return periods as HMRC holds them: open (`status` O) or fulfilled (F). Without `status`, `from` and `to` are required and at most 366 days apart. `device` carries the facts of the user's browser that HMRC requires.
     *
     * @param GbVatObligationsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbVatObligationsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbVatObligationsList(GbVatObligationsListDeclarationsRequest $request, ?array $options = null): ?GbVatObligationsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/vat/obligations/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbVatObligationsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Reads a VAT return the company submitted to HMRC, by the `periodKey` of its obligation. Answers 404 when HMRC has no return for the period.
     *
     * @param GbVatReturnsGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbVatReturnsGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbVatReturnsGet(GbVatReturnsGetDeclarationsRequest $request, ?array $options = null): ?GbVatReturnsGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/vat/returns/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbVatReturnsGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the company's VAT liabilities HMRC holds whose period ends between `from` (2017-12-01 or later) and `to` (today or earlier), at most 365 days apart.
     *
     * @param GbVatLiabilitiesListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbVatLiabilitiesListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbVatLiabilitiesList(GbVatLiabilitiesListDeclarationsRequest $request, ?array $options = null): ?GbVatLiabilitiesListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/vat/liabilities/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbVatLiabilitiesListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the VAT payments HMRC received from the company between `from` (2017-12-01 or later) and `to` (today or earlier), at most 365 days apart.
     *
     * @param GbVatPaymentsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?GbVatPaymentsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbVatPaymentsList(GbVatPaymentsListDeclarationsRequest $request, ?array $options = null): ?GbVatPaymentsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/vat/payments/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return GbVatPaymentsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Returns the penalties HMRC applied to the company's VAT account in the last 24 months as HMRC answers them: `totalisations`, `lateSubmissionPenalty` and `latePaymentPenalty`.
     *
     * @param GbVatPenaltiesGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?array<string, mixed>
     * @throws NordletException
     * @throws NordletApiException
     */
    public function gbVatPenaltiesGet(GbVatPenaltiesGetDeclarationsRequest $request, ?array $options = null): ?array
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/gb/vat/penalties/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return JsonDecoder::decodeArray($json, ['string' => 'mixed']); // @phpstan-ignore-line
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Form 941 figures of a quarter from the approved US payroll runs whose pay date (the period end without one) falls in it: line 1 the employees paid for the pay period that includes the 12th of the quarter's last month, line 2 the wages, line 3 the federal income tax withheld, lines 5a, 5c and 5d the social security, Medicare and Additional Medicare wages with their tax at 12.4%, 2.9% and 0.9%, line 7 the fractions of cents between those and the amounts withheld and owed, lines 10 and 12, and line 16 the liability of each month by pay date with the liability of each pay date for Schedule B. `deposits` (the deposits made for the quarter) fills line 13 and line 14 or 15. Lines 5b, 5f, 8, 9 and 11 are not filled. Answers 422 for a company outside the US.
     *
     * @param Us941GetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Us941GetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function us941Get(Us941GetDeclarationsRequest $request, ?array $options = null): ?Us941GetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/941/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Us941GetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Form 940 figures of a year from the approved US payroll runs paid in it: line 1a the state of the employees paid (the `usWorkState` employee option) or line 1b when there are several, line 3 the payments to employees, line 5 the part of each employee's payments above $7,000, line 7 the taxable FUTA wages, line 8 at 0.6%, line 12, and Part 5 with the liability of each quarter when line 12 is more than $500. Exempt payments (line 4), the state unemployment tax adjustments (lines 9 and 10) and the credit reduction of Schedule A (line 11) are not filled. Answers 422 for a company outside the US.
     *
     * @param Us940GetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Us940GetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function us940Get(Us940GetDeclarationsRequest $request, ?array $options = null): ?Us940GetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/940/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Us940GetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Forms W-2 of a year, one per employee paid in an approved US payroll run of the year, and the Form W-3 totals: box a the employee's `personalCode` (the social security number), box e the name, boxes 1 to 6 the wages, the federal income tax, the social security wages and tax and the Medicare wages and tax (with the Additional Medicare Tax), and boxes 15 to 17 for Delaware with the company's `deWithholdingAccount`; W-3 box c the number of forms and box e the company's `ein`. Answers 422 for a company outside the US.
     *
     * @param UsW2ListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsW2ListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usW2List(UsW2ListDeclarationsRequest $request, ?array $options = null): ?UsW2ListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/w2/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsW2ListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The federal income tax return of the fiscal year that ends in `year`, chosen by the legal form: Form 1120 for a corporation, Form 1120-S for an S corporation, Form 1065 for a partnership, and for an LLC the return of the filing option `usLlcTaxReturn`. `page1` gives the income and deduction lines filled from the statement rows of the form (`ledger/statement-rows/list` with `scheme`) and the total lines computed as the form says (Form 1120 lines 1c, 3, 11, 27 and 28; Form 1120-S lines 1c, 3, 6, 21 and 22; Form 1065 lines 1c, 3, 8, 16c, 22 and 23); line 1b is the debit balance of the returns and allowances accounts. `scheduleL` gives each Schedule L line at the beginning and end of the year, `otherLines` the Schedule K and M-1 lines. Answers 422 for a company outside the US, a sole proprietorship, and an LLC without `usLlcTaxReturn`.
     *
     * @param UsIncomeTaxReturnGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsIncomeTaxReturnGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usIncomeTaxReturnGet(UsIncomeTaxReturnGetDeclarationsRequest $request, ?array $options = null): ?UsIncomeTaxReturnGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/income-tax-return/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsIncomeTaxReturnGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Forms 1099-NEC of a calendar year: one per partner marked with `identifiers.nonemployeeCompensation` = `yes` whose payments in the year reach the threshold (2026: $2,000), box 1 the payments on its registered purchase invoices less those on its credit notes, by payment date, in the company currency at the invoice rate, without settlements by credit note or advance. A partner whose Form W-9 tax classification is a C or S corporation (`c-corporation`, `s-corporation`, `llc-c`, `llc-s`) is listed in `excluded`. The recipient name type is `I` for a partner of type `person` and `B` otherwise. Answers 422 for a company outside the US and for a year whose threshold Nordlet does not have.
     *
     * @param Us1099NecListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?Us1099NecListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function us1099NecList(Us1099NecListDeclarationsRequest $request, ?array $options = null): ?Us1099NecListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/1099-nec/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return Us1099NecListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Delaware withholding of a month (YYYY-MM), a quarter (YYYY-Qn) or a year (YYYY) from the approved US payroll runs paid in it: the employees with Delaware income tax withheld, their wages and the tax withheld, and `wthTax`, the boxes of Form WTH-TAX (taxpayer ID `deWithholdingAccount`, the tax period, line 1 the tax withheld, line 2 the amount remitted, here equal to line 1). Answers 422 for a company outside the US.
     *
     * @param UsDeWithholdingGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsDeWithholdingGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usDeWithholdingGet(UsDeWithholdingGetDeclarationsRequest $request, ?array $options = null): ?UsDeWithholdingGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/de/withholding/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsDeWithholdingGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The lines of the Delaware annual reconciliation, Form WTH-REC, of a year from the approved US payroll runs paid in it: line 1 the Delaware wages, line 2 the number of Forms W-2, line 3 the Delaware income tax withheld, and the withholding worksheet of tax withheld by month of the pay date. `taxPaid` is the tax paid to the Division of Revenue in each month, January to December; with it the response fills the tax paid column, line 4, line 5a (overpayment), line 5b (balance due) and line 6 (total remittance), without it those are null. Answers 422 for a company outside the US.
     *
     * @param UsDeWithholdingReconciliationGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsDeWithholdingReconciliationGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usDeWithholdingReconciliationGet(UsDeWithholdingReconciliationGetDeclarationsRequest $request, ?array $options = null): ?UsDeWithholdingReconciliationGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/de/withholding-reconciliation/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsDeWithholdingReconciliationGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Delaware unemployment insurance figures of a quarter from the approved US payroll runs paid in it, for the employees charged Delaware unemployment insurance: the total wages, the wages above each employee's yearly wage base, the taxable wages, the contributions, and each employee with the social security number (`personalCode`) and the wages of the quarter. `uc8` gives the lines of Form UC-8: line 1 the covered workers of each month in a payroll period that includes the 12th, lines 2 to 4 the gross covered, excess and taxable wages, line 5 the taxable wages multiplied by the rate of the runs, line 7 line 5 less line 6 and line 10 lines 7, 8 and 9; lines 6 (approved credit), 8 (interest) and 9 (penalty) are `approvedCredit`, `interest` and `penalty` when given, otherwise null and counted as zero. `uc8a` gives Form UC-8A in pages of 30 rows (social security number, first initial, last name, gross covered wages; Nordlet keeps no middle initial) with line 31 of each page, line 32 the total of the pages after the first and line 33 the grand total. Answers 422 for a company outside the US.
     *
     * @param UsDeUnemploymentGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsDeUnemploymentGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usDeUnemploymentGet(UsDeUnemploymentGetDeclarationsRequest $request, ?array $options = null): ?UsDeUnemploymentGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/de/unemployment/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsDeUnemploymentGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Delaware gross receipts tax of a month (YYYY-MM) or a quarter (YYYY-Qn) for one business activity of the company's license: the net amounts of the sale invoices issued in the period (credit notes subtracted, advance invoices left out because the final invoice carries the sale, amounts in another currency at the rate stored on the invoice), less `excludedReceipts` (receipts from outside Delaware and from related entities, which the caller states), less the monthly or quarterly deduction of the activity, at the rate of the activity in 30 Del. C. chapters 23, 25, 27 and 29. An invoice in another currency without a stored rate is left out with a warning. Answers 422 for a company outside the US.
     *
     * @param UsDeGrossReceiptsGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsDeGrossReceiptsGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usDeGrossReceiptsGet(UsDeGrossReceiptsGetDeclarationsRequest $request, ?array $options = null): ?UsDeGrossReceiptsGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/de/gross-receipts/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsDeGrossReceiptsGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The sales of a US company per state between two issue dates, to see where its sales may oblige it to collect a state's sales tax: the number and net amount of the issued sale invoices and credit notes (subtracted) by the state of the document's `deliveryAddress`, else of the customer's address (`subdivision`), the sales delivered in the US without a state, and the sales delivered outside the US. Advance invoices are left out because the final invoice carries the sale; amounts in another currency are at the rate stored on the invoice, and an invoice without one is left out with a warning. Answers 422 for a company outside the US.
     *
     * @param UsStateSalesGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsStateSalesGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usStateSalesGet(UsStateSalesGetDeclarationsRequest $request, ?array $options = null): ?UsStateSalesGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/state-sales/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsStateSalesGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The sales tax a US company charged between two issue dates, per state (`salesTaxJurisdiction` of the document), for its state sales tax returns: the number of issued invoices and credit notes (subtracted) with sales tax, their net amount split into `taxableSales` and `exemptSales` (documents charged no sales tax under the customer's certificate of exemption, `salesTaxExemptionId`), and their sales tax, which `sales/invoices/issue` credited to the sales tax payable account. Amounts in another currency are at the rate stored on the document, and a document without one is left out with a warning. Answers 422 for a company outside the US.
     *
     * @param UsSalesTaxGetDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsSalesTaxGetDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usSalesTaxGet(UsSalesTaxGetDeclarationsRequest $request, ?array $options = null): ?UsSalesTaxGetDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/sales-tax/get",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsSalesTaxGetDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The Delaware franchise tax of a domestic corporation for its annual franchise tax report, by 8 Del. C. § 503: the authorized shares method on the total of `authorizedShares`, and, when `issuedShares` and `totalGrossAssets` (the total assets of Form 1120 Schedule L) are given, the assumed par value capital method, where a share class without `parValue` has no par value; `tax` is the lesser of the two (at least $175 and $400, at most $200,000), or $250,000 for a Large Corporate Filer. `annualReportFee` is the filing fee of a non-exempt domestic corporation, paid with the report. Answers 422 for a company outside the US.
     *
     * @param UsDeFranchiseTaxComputeDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsDeFranchiseTaxComputeDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usDeFranchiseTaxCompute(UsDeFranchiseTaxComputeDeclarationsRequest $request, ?array $options = null): ?UsDeFranchiseTaxComputeDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/de/franchise-tax/compute",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsDeFranchiseTaxComputeDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The hours worked in each workweek that touches the period, per employee of a US company (or the one `employeeId`), for the overtime and records of the Fair Labor Standards Act: the workweek starts on the employee's `usWorkweekStart` day and runs 7 days; the hours are those entered on the work and business-trip days of the timesheets; `overtimeHours` are the hours above 40 in the workweek, 0 for an employee whose `usFlsaExempt` is yes. An employee without `usWorkweekStart` is left out with a warning. Overtime pay is entered on the payroll run as an addition of payment type `overtime-pay` with its hours. Answers 422 for a company outside the US.
     *
     * @param UsWorkweeksListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsWorkweeksListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usWorkweeksList(UsWorkweeksListDeclarationsRequest $request, ?array $options = null): ?UsWorkweeksListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/workweeks/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsWorkweeksListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * The payroll and time records that 29 CFR 516.2(a) requires for each employee of a US company (or the one `employeeId`) over the period: name and `code`, home address with zip code, date of birth when the employee is under 19 on `from`, `usSex`, the occupation (the position of a contract of the period), the day and time the workweek begins (`usWorkweekStart`, `usWorkweekStartTime`), the hours of each workday and workweek with the regular hourly rate of a workweek with overtime and the straight-time earnings of the workweek (hourly contracts), and for each approved payroll run that overlaps the period the basis of pay, the regular pay, the overtime pay and hours, the straight-time earnings and the overtime premium (the overtime pay less the overtime hours at the hourly rate), the additions and deductions, the total wages, the pay date and the pay period. Figures that need an hourly contract are null without one, with a warning; missing employee data is listed in `warnings`. Answers 422 for a company outside the US.
     *
     * @param UsFlsaRecordsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?UsFlsaRecordsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function usFlsaRecordsList(UsFlsaRecordsListDeclarationsRequest $request, ?array $options = null): ?UsFlsaRecordsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/us/flsa-records/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return UsFlsaRecordsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the filing systems the company can configure: those of the company country (or of `country` when given), the EU-wide systems and the cross-border e-invoicing systems `it_sdi`, `pl_ksef` and `ro_efactura`. Each row carries the stored values, with a secret or certificate field shown as `__secret_set__` and the fields taken from the company profile filled from it. Each field carries its `label` in the language of `Accept-Language` (English otherwise) when Nordlet has one, and a `select` field its allowed values in `options`. Set the values with `declarations/configs/update` {system, config: {key: value}}.
     *
     * @param ConfigsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConfigsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function configsList(ConfigsListDeclarationsRequest $request = new ConfigsListDeclarationsRequest(), ?array $options = null): ?ConfigsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/configs/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ConfigsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Stores the settings of one filing system for the company, merging the given fields into the stored ones. A secret or certificate value is encrypted before it is stored, an empty string clears a field, and `__secret_set__` leaves a stored secret unchanged. Answers 422 for an unknown system.
     *
     * @param ConfigsUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?ConfigsUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function configsUpdate(ConfigsUpdateDeclarationsRequest $request, ?array $options = null): ?ConfigsUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/configs/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return ConfigsUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Stores a PEM certificate, a PEM private key or a PKCS#12 bundle (base64 in `content`, opened with `passphrase` when it needs one) in the settings of the filing system and replaces the earlier upload of the same kind; for a PEM certificate the fingerprint, subject, issuer and validity dates are recorded. Answers 422 when the system is unknown or does not authenticate with a certificate. Returns the full certificate list of the company.
     *
     * @param CertificatesUploadDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CertificatesUploadDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function certificatesUpload(CertificatesUploadDeclarationsRequest $request, ?array $options = null): ?CertificatesUploadDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/certificates/upload",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CertificatesUploadDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the certificates and private keys stored for the filing systems of the company, ordered by system and field, each with its validity facts and health (`ok`, `expiring`, `expired` or `unknown`).
     *
     * @param CertificatesListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CertificatesListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function certificatesList(CertificatesListDeclarationsRequest $request = new CertificatesListDeclarationsRequest(), ?array $options = null): ?CertificatesListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/certificates/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CertificatesListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Removes the certificate or the private key (`fieldKey`) of a filing system from the settings of the company and from the certificate list, and returns the remaining certificates.
     *
     * @param CertificatesDeleteDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?CertificatesDeleteDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function certificatesDelete(CertificatesDeleteDeclarationsRequest $request, ?array $options = null): ?CertificatesDeleteDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/certificates/delete",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return CertificatesDeleteDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the filing deadlines Nordlet can file by itself for the country of the company: for each, whether automatic filing is switched on, whether the rule applies to the company profile, whether its filing system is configured, the state of its certificate and whether it would go to the test or the production service.
     *
     * @param AutomationListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AutomationListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function automationList(AutomationListDeclarationsRequest $request = new AutomationListDeclarationsRequest(), ?array $options = null): ?AutomationListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/automation/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AutomationListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Switches automatic filing of one deadline on or off for the company and returns the list of `declarations/automation/list`. Answers 422 when the deadline is not one Nordlet files, or when switching on while the filing system is connected to the test service of the administration (unless the company is a sandbox), is not configured, or has no valid certificate.
     *
     * @param AutomationUpdateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?AutomationUpdateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function automationUpdate(AutomationUpdateDeclarationsRequest $request, ?array $options = null): ?AutomationUpdateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/automation/update",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return AutomationUpdateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Sends a submission that is still in status `generated` through its filing system once more, with the stored file or, when none was stored yet, a freshly generated one, and returns the updated submission. Answers 409 when the submission is already submitted, accepted or rejected.
     *
     * @param SubmissionsRetryDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsRetryDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsRetry(SubmissionsRetryDeclarationsRequest $request, ?array $options = null): ?SubmissionsRetryDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/retry",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsRetryDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Sends a submission whose `confirmationPending` is true once more with the stored file and the token the administration handed back with its warnings (the advis of Erhvervsstyrelsen's Regnskab Indberet, which files the annual report only when it is sent again with that token), and returns the updated submission. Answers 409 when the submission is not waiting for a confirmation.
     *
     * @param SubmissionsConfirmDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsConfirmDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsConfirm(SubmissionsConfirmDeclarationsRequest $request, ?array $options = null): ?SubmissionsConfirmDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/confirm",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsConfirmDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the file of a submitted or accepted submission again from the current data, the way it was built for that submission, and compares it with the file that was filed. `needed` is false when the two carry the same data: a correction would file the same return again. `changes` lists what differs, at most 500 entries (`changeCount` counts them all): for an XML file each element or attribute by its path below the root element (`field`), for another text file each line that is only in the filed file or only in the new one (`line`, its line number in that file); `filed` and `current` are the two values, null where the field or line is missing on that side. Dates and times of the moment a file was built (ISO date-times, and the dates of both builds written as YYYY-MM-DD, YYYYMMDD, DD.MM.YYYY or DDMMYYYY) are not counted as differences. A ZIP or PDF file is compared byte by byte and lists no `changes`. Answers 422 for a submission that is not submitted or accepted, whose deadline Nordlet cannot correct, or that has no stored file.
     *
     * @param SubmissionsCorrectionPreviewDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsCorrectionPreviewDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsCorrectionPreview(SubmissionsCorrectionPreviewDeclarationsRequest $request, ?array $options = null): ?SubmissionsCorrectionPreviewDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/correction-preview",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsCorrectionPreviewDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Builds the Lithuanian i.SAF register file of a month (`dataType` F both registers, S sale invoices only, P purchase invoices only), stores it and creates a submission in status `generated` for the obligation `lt-isaf`, the only obligation accepted. The XML alone comes from `declarations/lt/isaf/generate`; the submission is moved on with `declarations/submissions/mark`.
     *
     * @param SubmissionsCreateDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsCreateDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsCreate(SubmissionsCreateDeclarationsRequest $request, ?array $options = null): ?SubmissionsCreateDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/create",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsCreateDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Records by hand that a submission was sent, accepted or rejected, with the reference and message of the administration when given. The allowed moves are `generated` to `submitted` and `submitted` to `accepted` or `rejected`; any other move answers 409. A submission without a transport system is marked as sent manually.
     *
     * @param SubmissionsMarkDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsMarkDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsMark(SubmissionsMarkDeclarationsRequest $request, ?array $options = null): ?SubmissionsMarkDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/mark",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsMarkDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }

    /**
     * Lists the declaration submissions of the company, newest first, filterable by `obligation`, `status`, `periodYear` and `periodMonth` and sortable by `createdAt`, `periodYear`, `obligation`, `period` (the year, then the month), `fileName`, `status` and `externalRef`. `canAmend` is true on the newest submitted or accepted send of a period (per document for a deadline filed as one document per person) whose filing can be corrected; `correction` names the fields `calendar/submit` with `amend: true` takes for it.
     *
     * @param SubmissionsListDeclarationsRequest $request
     * @param ?array{
     *   baseUrl?: string,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     *   queryParameters?: array<string, mixed>,
     *   bodyProperties?: array<string, mixed>,
     * } $options
     * @return ?SubmissionsListDeclarationsResponse
     * @throws NordletException
     * @throws NordletApiException
     */
    public function submissionsList(SubmissionsListDeclarationsRequest $request = new SubmissionsListDeclarationsRequest(), ?array $options = null): ?SubmissionsListDeclarationsResponse
    {
        $options = array_merge($this->options, $options ?? []);
        try {
            $response = $this->client->sendRequest(
                new JsonApiRequest(
                    baseUrl: $options['baseUrl'] ?? $this->client->options['baseUrl'] ?? Environments::Production->value,
                    path: "v1/declarations/submissions/list",
                    method: HttpMethod::POST,
                    body: $request,
                ),
                $options,
            );
            $statusCode = $response->getStatusCode();
            if ($statusCode >= 200 && $statusCode < 400) {
                $json = $response->getBody()->getContents();
                if (empty($json)) {
                    return null;
                }
                return SubmissionsListDeclarationsResponse::fromJson($json);
            }
        } catch (JsonException $e) {
            throw new NordletException(message: "Failed to deserialize response: {$e->getMessage()}", previous: $e);
        } catch (ClientExceptionInterface $e) {
            throw new NordletException(message: $e->getMessage(), previous: $e);
        }
        throw new NordletApiException(
            message: 'API request failed',
            statusCode: $statusCode,
            body: $response->getBody()->getContents(),
        );
    }
}
