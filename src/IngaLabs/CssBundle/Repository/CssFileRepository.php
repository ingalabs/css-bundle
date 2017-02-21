<?php

/*
 * (c) Antal Áron <antalaron@antalaron.hu>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace IngaLabs\CssBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CssFileRepository.
 *
 * @author Antal Áron <antalaron@antalaron.hu>
 */
class CssFileRepository extends EntityRepository
{
    public function findOneByPath($path)
    {
        return $this->findOneBy([
            'path' => $path,
        ]);
    }
}
