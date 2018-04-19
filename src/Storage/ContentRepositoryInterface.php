<?php

namespace PandaAdmin\Core\Storage;


use PandaAdmin\Core\Content\ContentRecordInterface;

interface ContentRepositoryInterface
{
    /**
     * @param $id
     * @return \PandaAdmin\Core\Content\ContentRecordInterface|null
     */
    public function find($id): ?ContentRecordInterface;

    /**
     * @param array $criteria
     * @param array|null $orderBy
     * @param null $limit
     * @param null $offset
     * @return mixed
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null);

    /**
     * @param array $criteria
     * @return \PandaAdmin\Core\Content\ContentRecordInterface|null
     */
    public function findOneBy(array $criteria): ?ContentRecordInterface;

    /**
     * @return mixed
     */
    public function findAll();
}