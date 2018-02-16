<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PostRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Post::class);
    }
    
    private function getColumnName($sort_by)
    {
        switch ($sort_by):
            case "createdTime":
                return "p.createdTime";
            case "fromName":
                return "p.fromName";
            case "likes":
                return "p.likes";
            case "comments":
                return "num_comments";
            default:
                return "p.id";
        endswitch;
    }
    
    private function getSortOrder($sort_order)
    {
        switch ($sort_order):
            case "asc":
                return "asc";
            case "desc":
                return "desc";
            default:
                return "asc";
        endswitch;
    }

    public function findAllAndCountComments($sort_by, $sort_order): array
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p', 'COUNT(c.id) as num_comments')
            ->leftJoin('p.comments', 'c')
            ->groupBy('p.id')
            ->orderBy($this->getColumnName($sort_by), $this->getSortOrder($sort_order))
            ->getQuery();

        return $qb->execute();
    }
}
