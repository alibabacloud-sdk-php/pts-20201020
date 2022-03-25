<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene;

use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\relationList\apiList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\relationList\fileParameterExplainList;
use AlibabaCloud\Tea\Model;

class relationList extends Model
{
    /**
     * @description 链路下的API信息
     *
     * @var apiList[]
     */
    public $apiList;

    /**
     * @description 链路中的文件参数配置信息
     *
     * @var fileParameterExplainList[]
     */
    public $fileParameterExplainList;

    /**
     * @description 链路id
     *
     * @var string
     */
    public $relationId;

    /**
     * @description 链路名
     *
     * @var string
     */
    public $relationName;
    protected $_name = [
        'apiList'                  => 'ApiList',
        'fileParameterExplainList' => 'FileParameterExplainList',
        'relationId'               => 'RelationId',
        'relationName'             => 'RelationName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiList) {
            $res['ApiList'] = [];
            if (null !== $this->apiList && \is_array($this->apiList)) {
                $n = 0;
                foreach ($this->apiList as $item) {
                    $res['ApiList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileParameterExplainList) {
            $res['FileParameterExplainList'] = [];
            if (null !== $this->fileParameterExplainList && \is_array($this->fileParameterExplainList)) {
                $n = 0;
                foreach ($this->fileParameterExplainList as $item) {
                    $res['FileParameterExplainList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }
        if (null !== $this->relationName) {
            $res['RelationName'] = $this->relationName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n              = 0;
                foreach ($map['ApiList'] as $item) {
                    $model->apiList[$n++] = null !== $item ? apiList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileParameterExplainList'])) {
            if (!empty($map['FileParameterExplainList'])) {
                $model->fileParameterExplainList = [];
                $n                               = 0;
                foreach ($map['FileParameterExplainList'] as $item) {
                    $model->fileParameterExplainList[$n++] = null !== $item ? fileParameterExplainList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }
        if (isset($map['RelationName'])) {
            $model->relationName = $map['RelationName'];
        }

        return $model;
    }
}
