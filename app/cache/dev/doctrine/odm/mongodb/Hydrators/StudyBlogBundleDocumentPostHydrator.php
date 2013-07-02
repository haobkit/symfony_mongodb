<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class StudyBlogBundleDocumentPostHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @ReferenceOne */
        if (isset($data['blog'])) {
            $reference = $data['blog'];
            if (isset($this->class->fieldMappings['blog']['simple']) && $this->class->fieldMappings['blog']['simple']) {
                $className = $this->class->fieldMappings['blog']['targetDocument'];
                $mongoId = $reference;
            } else {
                $className = $this->dm->getClassNameFromDiscriminatorValue($this->class->fieldMappings['blog'], $reference);
                $mongoId = $reference['$id'];
            }
            $targetMetadata = $this->dm->getClassMetadata($className);
            $id = $targetMetadata->getPHPIdentifierValue($mongoId);
            $return = $this->dm->getReference($className, $id);
            $this->class->reflFields['blog']->setValue($document, $return);
            $hydratedData['blog'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['title'])) {
            $value = $data['title'];
            $return = (string) $value;
            $this->class->reflFields['title']->setValue($document, $return);
            $hydratedData['title'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['shortDescription'])) {
            $value = $data['shortDescription'];
            $return = (string) $value;
            $this->class->reflFields['shortDescription']->setValue($document, $return);
            $hydratedData['shortDescription'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['fullDescription'])) {
            $value = $data['fullDescription'];
            $return = (string) $value;
            $this->class->reflFields['fullDescription']->setValue($document, $return);
            $hydratedData['fullDescription'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['viewed'])) {
            $value = $data['viewed'];
            $return = (int) $value;
            $this->class->reflFields['viewed']->setValue($document, $return);
            $hydratedData['viewed'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['author'])) {
            $value = $data['author'];
            $return = (string) $value;
            $this->class->reflFields['author']->setValue($document, $return);
            $hydratedData['author'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['postImage'])) {
            $value = $data['postImage'];
            $return = (string) $value;
            $this->class->reflFields['postImage']->setValue($document, $return);
            $hydratedData['postImage'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['createdDate'])) {
            $value = $data['createdDate'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } else { $return = new \DateTime($value); }
            $this->class->reflFields['createdDate']->setValue($document, clone $return);
            $hydratedData['createdDate'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['updatedDate'])) {
            $value = $data['updatedDate'];
            if ($value instanceof \MongoDate) { $return = new \DateTime(); $return->setTimestamp($value->sec); } elseif (is_numeric($value)) { $return = new \DateTime(); $return->setTimestamp($value); } else { $return = new \DateTime($value); }
            $this->class->reflFields['updatedDate']->setValue($document, clone $return);
            $hydratedData['updatedDate'] = $return;
        }
        return $hydratedData;
    }
}