<?php

declare(strict_types=1);

namespace Owl\Bundle\SettingBundle\Factory;

use Symfony\Component\Form\FormInterface;
use Owl\Bridge\SyliusResource\Controller\RequestConfiguration;

interface SettingFormFactoryInterface
{
    public function create(RequestConfiguration $requestConfiguration, array $data): FormInterface;
}
