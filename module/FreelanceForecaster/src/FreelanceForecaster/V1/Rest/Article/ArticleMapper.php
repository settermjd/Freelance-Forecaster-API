<?php

namespace FreelanceForecaster\V1\Rest\Article;

use Zend\Db\Sql\Select;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\DbSelect;

class ArticleMapper
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function fetchAll()
    {
        $select = new Select('articles');
        $paginatorAdapter = new DbSelect($select, $this->adapter);
        $collection = new ArticleCollection($paginatorAdapter);
        return $collection;
    }

    public function fetchOne($albumId)
    {
        $sql = 'SELECT * FROM articles WHERE id = ?';
        $resultset = $this->adapter->query($sql, array($albumId));
        $data = $resultset->toArray();

        if (!$data) {
            return false;
        }

        $entity = new ArticleEntity();
        $entity->exchangeArray($data[0]);

        return $entity;
    }
}