<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\Integration\Model;

use Magento\Authorization\Model\UserContextInterface;

class CustomUserContext implements UserContextInterface
{
    /**
     * @var int|null
     *
     * @SuppressWarnings(PHPCS)
     */
    private readonly ?int $userId;

    /**
     * @var int|null
     *
     * @SuppressWarnings(PHPCS)
     */
    private readonly ?int $userType;

    /**
     * @param int|null $userId
     * @param int|null $userType
     */
    public function __construct(?int $userId, ?int $userType)
    {
        $this->userId = $userId;
        $this->userType = $userType;
    }

    /**
     * @inheritDoc
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @inheritDoc
     */
    public function getUserType()
    {
        return $this->userType;
    }
}
