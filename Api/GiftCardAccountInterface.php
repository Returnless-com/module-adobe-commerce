<?php
namespace Returnless\Connector\Api;

interface GiftCardAccountInterface
{
    /**
     * Set descriptions for the products.
     *
     * @param string[] $giftCard
     * @return ResponseGiftCardAccountInterface
     */
    public function createGiftCardAccount(array $giftCard);
}