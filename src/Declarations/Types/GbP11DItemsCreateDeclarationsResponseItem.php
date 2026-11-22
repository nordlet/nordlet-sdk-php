<?php

namespace Nordlet\Declarations\Types;

use Nordlet\Core\Json\JsonSerializableType;
use Exception;

class GbP11DItemsCreateDeclarationsResponseItem extends JsonSerializableType
{
    /**
     * @var (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    GbP11DItemsCreateDeclarationsResponseItemAssetTransferred
     *   |GbP11DItemsCreateDeclarationsResponseItemPayment
     *   |GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments
     *   |GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards
     *   |GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation
     *   |GbP11DItemsCreateDeclarationsResponseItemMileageAllowance
     *   |GbP11DItemsCreateDeclarationsResponseItemCar
     *   |GbP11DItemsCreateDeclarationsResponseItemVans
     *   |GbP11DItemsCreateDeclarationsResponseItemLoan
     *   |GbP11DItemsCreateDeclarationsResponseItemMedical
     *   |GbP11DItemsCreateDeclarationsResponseItemRelocation
     *   |GbP11DItemsCreateDeclarationsResponseItemServices
     *   |GbP11DItemsCreateDeclarationsResponseItemAssetAvailable
     *   |GbP11DItemsCreateDeclarationsResponseItemOtherClass1A
     *   |GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A
     *   |GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesOther
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'asset-transferred'
     *   |'payment'
     *   |'tax-on-notional-payments'
     *   |'vouchers-or-credit-cards'
     *   |'living-accommodation'
     *   |'mileage-allowance'
     *   |'car'
     *   |'vans'
     *   |'loan'
     *   |'medical'
     *   |'relocation'
     *   |'services'
     *   |'asset-available'
     *   |'other-class-1a'
     *   |'other-non-class-1a'
     *   |'tax-paid-not-deducted'
     *   |'expenses-travel-and-subsistence'
     *   |'expenses-entertainment'
     *   |'expenses-home-telephone'
     *   |'expenses-non-qualifying-relocation'
     *   |'expenses-other'
     *   |'_unknown'
     * ),
     *   value: (
     *    GbP11DItemsCreateDeclarationsResponseItemAssetTransferred
     *   |GbP11DItemsCreateDeclarationsResponseItemPayment
     *   |GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments
     *   |GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards
     *   |GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation
     *   |GbP11DItemsCreateDeclarationsResponseItemMileageAllowance
     *   |GbP11DItemsCreateDeclarationsResponseItemCar
     *   |GbP11DItemsCreateDeclarationsResponseItemVans
     *   |GbP11DItemsCreateDeclarationsResponseItemLoan
     *   |GbP11DItemsCreateDeclarationsResponseItemMedical
     *   |GbP11DItemsCreateDeclarationsResponseItemRelocation
     *   |GbP11DItemsCreateDeclarationsResponseItemServices
     *   |GbP11DItemsCreateDeclarationsResponseItemAssetAvailable
     *   |GbP11DItemsCreateDeclarationsResponseItemOtherClass1A
     *   |GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A
     *   |GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation
     *   |GbP11DItemsCreateDeclarationsResponseItemExpensesOther
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemAssetTransferred $assetTransferred
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function assetTransferred(GbP11DItemsCreateDeclarationsResponseItemAssetTransferred $assetTransferred): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'asset-transferred',
            'value' => $assetTransferred,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemPayment $payment
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function payment(GbP11DItemsCreateDeclarationsResponseItemPayment $payment): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'payment',
            'value' => $payment,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments $taxOnNotionalPayments
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function taxOnNotionalPayments(GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments $taxOnNotionalPayments): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'tax-on-notional-payments',
            'value' => $taxOnNotionalPayments,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards $vouchersOrCreditCards
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function vouchersOrCreditCards(GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards $vouchersOrCreditCards): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'vouchers-or-credit-cards',
            'value' => $vouchersOrCreditCards,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation $livingAccommodation
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function livingAccommodation(GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation $livingAccommodation): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'living-accommodation',
            'value' => $livingAccommodation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemMileageAllowance $mileageAllowance
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function mileageAllowance(GbP11DItemsCreateDeclarationsResponseItemMileageAllowance $mileageAllowance): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'mileage-allowance',
            'value' => $mileageAllowance,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemCar $car
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function car(GbP11DItemsCreateDeclarationsResponseItemCar $car): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'car',
            'value' => $car,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemVans $vans
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function vans(GbP11DItemsCreateDeclarationsResponseItemVans $vans): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'vans',
            'value' => $vans,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemLoan $loan
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function loan(GbP11DItemsCreateDeclarationsResponseItemLoan $loan): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'loan',
            'value' => $loan,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemMedical $medical
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function medical(GbP11DItemsCreateDeclarationsResponseItemMedical $medical): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'medical',
            'value' => $medical,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemRelocation $relocation
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function relocation(GbP11DItemsCreateDeclarationsResponseItemRelocation $relocation): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'relocation',
            'value' => $relocation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemServices $services
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function services(GbP11DItemsCreateDeclarationsResponseItemServices $services): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'services',
            'value' => $services,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemAssetAvailable $assetAvailable
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function assetAvailable(GbP11DItemsCreateDeclarationsResponseItemAssetAvailable $assetAvailable): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'asset-available',
            'value' => $assetAvailable,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemOtherClass1A $otherClass1A
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function otherClass1A(GbP11DItemsCreateDeclarationsResponseItemOtherClass1A $otherClass1A): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'other-class-1a',
            'value' => $otherClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A $otherNonClass1A
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function otherNonClass1A(GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A $otherNonClass1A): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'other-non-class-1a',
            'value' => $otherNonClass1A,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted $taxPaidNotDeducted
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function taxPaidNotDeducted(GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted $taxPaidNotDeducted): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'tax-paid-not-deducted',
            'value' => $taxPaidNotDeducted,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function expensesTravelAndSubsistence(GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence $expensesTravelAndSubsistence): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'expenses-travel-and-subsistence',
            'value' => $expensesTravelAndSubsistence,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment $expensesEntertainment
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function expensesEntertainment(GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment $expensesEntertainment): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'expenses-entertainment',
            'value' => $expensesEntertainment,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone $expensesHomeTelephone
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function expensesHomeTelephone(GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone $expensesHomeTelephone): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'expenses-home-telephone',
            'value' => $expensesHomeTelephone,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function expensesNonQualifyingRelocation(GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation $expensesNonQualifyingRelocation): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'expenses-non-qualifying-relocation',
            'value' => $expensesNonQualifyingRelocation,
        ]);
    }

    /**
     * @param GbP11DItemsCreateDeclarationsResponseItemExpensesOther $expensesOther
     * @return GbP11DItemsCreateDeclarationsResponseItem
     */
    public static function expensesOther(GbP11DItemsCreateDeclarationsResponseItemExpensesOther $expensesOther): GbP11DItemsCreateDeclarationsResponseItem
    {
        return new GbP11DItemsCreateDeclarationsResponseItem([
            'type' => 'expenses-other',
            'value' => $expensesOther,
        ]);
    }

    /**
     * @return bool
     */
    public function isAssetTransferred(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemAssetTransferred && $this->type === 'asset-transferred';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemAssetTransferred
     */
    public function asAssetTransferred(): GbP11DItemsCreateDeclarationsResponseItemAssetTransferred
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemAssetTransferred && $this->type === 'asset-transferred')) {
            throw new Exception(
                "Expected asset-transferred; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPayment(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemPayment && $this->type === 'payment';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemPayment
     */
    public function asPayment(): GbP11DItemsCreateDeclarationsResponseItemPayment
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemPayment && $this->type === 'payment')) {
            throw new Exception(
                "Expected payment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxOnNotionalPayments(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments
     */
    public function asTaxOnNotionalPayments(): GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments && $this->type === 'tax-on-notional-payments')) {
            throw new Exception(
                "Expected tax-on-notional-payments; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVouchersOrCreditCards(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards
     */
    public function asVouchersOrCreditCards(): GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards && $this->type === 'vouchers-or-credit-cards')) {
            throw new Exception(
                "Expected vouchers-or-credit-cards; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLivingAccommodation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation && $this->type === 'living-accommodation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation
     */
    public function asLivingAccommodation(): GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation && $this->type === 'living-accommodation')) {
            throw new Exception(
                "Expected living-accommodation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMileageAllowance(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemMileageAllowance && $this->type === 'mileage-allowance';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemMileageAllowance
     */
    public function asMileageAllowance(): GbP11DItemsCreateDeclarationsResponseItemMileageAllowance
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemMileageAllowance && $this->type === 'mileage-allowance')) {
            throw new Exception(
                "Expected mileage-allowance; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCar(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemCar && $this->type === 'car';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemCar
     */
    public function asCar(): GbP11DItemsCreateDeclarationsResponseItemCar
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemCar && $this->type === 'car')) {
            throw new Exception(
                "Expected car; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isVans(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemVans && $this->type === 'vans';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemVans
     */
    public function asVans(): GbP11DItemsCreateDeclarationsResponseItemVans
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemVans && $this->type === 'vans')) {
            throw new Exception(
                "Expected vans; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLoan(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemLoan && $this->type === 'loan';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemLoan
     */
    public function asLoan(): GbP11DItemsCreateDeclarationsResponseItemLoan
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemLoan && $this->type === 'loan')) {
            throw new Exception(
                "Expected loan; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMedical(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemMedical && $this->type === 'medical';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemMedical
     */
    public function asMedical(): GbP11DItemsCreateDeclarationsResponseItemMedical
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemMedical && $this->type === 'medical')) {
            throw new Exception(
                "Expected medical; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemRelocation && $this->type === 'relocation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemRelocation
     */
    public function asRelocation(): GbP11DItemsCreateDeclarationsResponseItemRelocation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemRelocation && $this->type === 'relocation')) {
            throw new Exception(
                "Expected relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isServices(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemServices && $this->type === 'services';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemServices
     */
    public function asServices(): GbP11DItemsCreateDeclarationsResponseItemServices
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemServices && $this->type === 'services')) {
            throw new Exception(
                "Expected services; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAssetAvailable(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemAssetAvailable && $this->type === 'asset-available';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemAssetAvailable
     */
    public function asAssetAvailable(): GbP11DItemsCreateDeclarationsResponseItemAssetAvailable
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemAssetAvailable && $this->type === 'asset-available')) {
            throw new Exception(
                "Expected asset-available; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemOtherClass1A && $this->type === 'other-class-1a';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemOtherClass1A
     */
    public function asOtherClass1A(): GbP11DItemsCreateDeclarationsResponseItemOtherClass1A
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemOtherClass1A && $this->type === 'other-class-1a')) {
            throw new Exception(
                "Expected other-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOtherNonClass1A(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A && $this->type === 'other-non-class-1a';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A
     */
    public function asOtherNonClass1A(): GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A && $this->type === 'other-non-class-1a')) {
            throw new Exception(
                "Expected other-non-class-1a; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTaxPaidNotDeducted(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted
     */
    public function asTaxPaidNotDeducted(): GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted && $this->type === 'tax-paid-not-deducted')) {
            throw new Exception(
                "Expected tax-paid-not-deducted; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesTravelAndSubsistence(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence
     */
    public function asExpensesTravelAndSubsistence(): GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence && $this->type === 'expenses-travel-and-subsistence')) {
            throw new Exception(
                "Expected expenses-travel-and-subsistence; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesEntertainment(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment && $this->type === 'expenses-entertainment';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment
     */
    public function asExpensesEntertainment(): GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment && $this->type === 'expenses-entertainment')) {
            throw new Exception(
                "Expected expenses-entertainment; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesHomeTelephone(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone
     */
    public function asExpensesHomeTelephone(): GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone && $this->type === 'expenses-home-telephone')) {
            throw new Exception(
                "Expected expenses-home-telephone; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesNonQualifyingRelocation(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation
     */
    public function asExpensesNonQualifyingRelocation(): GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation && $this->type === 'expenses-non-qualifying-relocation')) {
            throw new Exception(
                "Expected expenses-non-qualifying-relocation; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isExpensesOther(): bool
    {
        return $this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesOther && $this->type === 'expenses-other';
    }

    /**
     * @return GbP11DItemsCreateDeclarationsResponseItemExpensesOther
     */
    public function asExpensesOther(): GbP11DItemsCreateDeclarationsResponseItemExpensesOther
    {
        if (!($this->value instanceof GbP11DItemsCreateDeclarationsResponseItemExpensesOther && $this->type === 'expenses-other')) {
            throw new Exception(
                "Expected expenses-other; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'asset-transferred':
                $value = $this->asAssetTransferred()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'payment':
                $value = $this->asPayment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-on-notional-payments':
                $value = $this->asTaxOnNotionalPayments()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vouchers-or-credit-cards':
                $value = $this->asVouchersOrCreditCards()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'living-accommodation':
                $value = $this->asLivingAccommodation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'mileage-allowance':
                $value = $this->asMileageAllowance()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'car':
                $value = $this->asCar()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'vans':
                $value = $this->asVans()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'loan':
                $value = $this->asLoan()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'medical':
                $value = $this->asMedical()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'relocation':
                $value = $this->asRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'services':
                $value = $this->asServices()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'asset-available':
                $value = $this->asAssetAvailable()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-class-1a':
                $value = $this->asOtherClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other-non-class-1a':
                $value = $this->asOtherNonClass1A()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'tax-paid-not-deducted':
                $value = $this->asTaxPaidNotDeducted()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-travel-and-subsistence':
                $value = $this->asExpensesTravelAndSubsistence()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-entertainment':
                $value = $this->asExpensesEntertainment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-home-telephone':
                $value = $this->asExpensesHomeTelephone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-non-qualifying-relocation':
                $value = $this->asExpensesNonQualifyingRelocation()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'expenses-other':
                $value = $this->asExpensesOther()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'asset-transferred':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemAssetTransferred::jsonDeserialize($data);
                break;
            case 'payment':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemPayment::jsonDeserialize($data);
                break;
            case 'tax-on-notional-payments':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemTaxOnNotionalPayments::jsonDeserialize($data);
                break;
            case 'vouchers-or-credit-cards':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemVouchersOrCreditCards::jsonDeserialize($data);
                break;
            case 'living-accommodation':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemLivingAccommodation::jsonDeserialize($data);
                break;
            case 'mileage-allowance':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemMileageAllowance::jsonDeserialize($data);
                break;
            case 'car':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemCar::jsonDeserialize($data);
                break;
            case 'vans':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemVans::jsonDeserialize($data);
                break;
            case 'loan':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemLoan::jsonDeserialize($data);
                break;
            case 'medical':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemMedical::jsonDeserialize($data);
                break;
            case 'relocation':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemRelocation::jsonDeserialize($data);
                break;
            case 'services':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemServices::jsonDeserialize($data);
                break;
            case 'asset-available':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemAssetAvailable::jsonDeserialize($data);
                break;
            case 'other-class-1a':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemOtherClass1A::jsonDeserialize($data);
                break;
            case 'other-non-class-1a':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemOtherNonClass1A::jsonDeserialize($data);
                break;
            case 'tax-paid-not-deducted':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemTaxPaidNotDeducted::jsonDeserialize($data);
                break;
            case 'expenses-travel-and-subsistence':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemExpensesTravelAndSubsistence::jsonDeserialize($data);
                break;
            case 'expenses-entertainment':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemExpensesEntertainment::jsonDeserialize($data);
                break;
            case 'expenses-home-telephone':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemExpensesHomeTelephone::jsonDeserialize($data);
                break;
            case 'expenses-non-qualifying-relocation':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemExpensesNonQualifyingRelocation::jsonDeserialize($data);
                break;
            case 'expenses-other':
                $args['value'] = GbP11DItemsCreateDeclarationsResponseItemExpensesOther::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
