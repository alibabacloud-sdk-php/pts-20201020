<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcVSwitchResponseBody\vSwitchList;

use AlibabaCloud\Tea\Model;

class routeTable extends Model
{
    /**
     * @var string
     */
    public $routeTableId;

    /**
     * @var string
     */
    public $routeTableType;
    protected $_name = [
        'routeTableId'   => 'RouteTableId',
        'routeTableType' => 'RouteTableType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
        }
        if (null !== $this->routeTableType) {
            $res['RouteTableType'] = $this->routeTableType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return routeTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }
        if (isset($map['RouteTableType'])) {
            $model->routeTableType = $map['RouteTableType'];
        }

        return $model;
    }
}
