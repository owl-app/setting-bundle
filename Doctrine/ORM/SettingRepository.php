<?php

declare(strict_types=1);

namespace Owl\Bundle\SettingBundle\Doctrine\ORM;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use Owl\Component\Setting\Repository\SettingRepositoryInterface;

class SettingRepository extends EntityRepository implements SettingRepositoryInterface
{
    public function finAllBySection(string $section): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.section = :section')
            ->setParameter('section', $section)
            ->getQuery()
            ->getResult()
        ;
    }

    public function finAllBySectionAndKeys(string $section, array $keys): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.section = :section')
            ->andWhere('o.name IN (:keys)')
            ->setParameter('section', $section)
            ->setParameter('keys', $keys)
            ->getQuery()
            ->getResult()
        ;
    }
}
