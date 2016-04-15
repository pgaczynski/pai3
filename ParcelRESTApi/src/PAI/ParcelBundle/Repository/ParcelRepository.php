<?php

namespace PAI\ParcelBundle\Repository;

use Doctrine\ORM\EntityRepository;
use PAI\ParcelBundle\Model\ParcelInterface;

class ParcelRepository extends \Doctrine\ORM\EntityRepository
{
    public function delete(ParcelInterface $parcel) {
        $em = $this->getEntityManager();
        $em->remove($parcel);
        $em->flush();
    }

    public function save(ParcelInterface $parcel) {
        $em = $this->getEntityManager();
        $em->persist($parcel);
        $em->flush();
    }

}
