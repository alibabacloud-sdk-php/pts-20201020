<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcVSwitchResponseBody;

use AlibabaCloud\Tea\Model;

class vSwitchList extends Model
{
    /**
     * @example 1000
     *
     * @var int
     */
    public $availableIpAddressCount;

    /**
     * @example 1000
     *
     * @var int
     */
    public $maxAgentCount;

    /**
     * @example vsw-bp1eil9df23rsd8l1sevebiszooj
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example my-vswitch
     *
     * @var string
     */
    public $vSwitchName;

    /**
     * @example vpc-wz9bpdaebft6j23fesdf84v2f1um3a
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'availableIpAddressCount' => 'AvailableIpAddressCount',
        'maxAgentCount'           => 'MaxAgentCount',
        'vSwitchId'               => 'VSwitchId',
        'vSwitchName'             => 'VSwitchName',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableIpAddressCount) {
            $res['AvailableIpAddressCount'] = $this->availableIpAddressCount;
        }
        if (null !== $this->maxAgentCount) {
            $res['MaxAgentCount'] = $this->maxAgentCount;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchName) {
            $res['VSwitchName'] = $this->vSwitchName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vSwitchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableIpAddressCount'])) {
            $model->availableIpAddressCount = $map['AvailableIpAddressCount'];
        }
        if (isset($map['MaxAgentCount'])) {
            $model->maxAgentCount = $map['MaxAgentCount'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchName'])) {
            $model->vSwitchName = $map['VSwitchName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
