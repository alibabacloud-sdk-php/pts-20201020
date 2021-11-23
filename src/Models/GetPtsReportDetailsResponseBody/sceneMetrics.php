<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class sceneMetrics extends Model
{
    /**
     * @var int
     */
    public $allCount;

    /**
     * @var float
     */
    public $avgRt;

    /**
     * @var float
     */
    public $avgTps;

    /**
     * @var int
     */
    public $failCountBiz;

    /**
     * @var int
     */
    public $failCountReq;

    /**
     * @var float
     */
    public $seg90Rt;

    /**
     * @var float
     */
    public $seg99Rt;

    /**
     * @var float
     */
    public $successRateBiz;

    /**
     * @var float
     */
    public $successRateReq;
    protected $_name = [
        'allCount'       => 'AllCount',
        'avgRt'          => 'AvgRt',
        'avgTps'         => 'AvgTps',
        'failCountBiz'   => 'FailCountBiz',
        'failCountReq'   => 'FailCountReq',
        'seg90Rt'        => 'Seg90Rt',
        'seg99Rt'        => 'Seg99Rt',
        'successRateBiz' => 'SuccessRateBiz',
        'successRateReq' => 'SuccessRateReq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allCount) {
            $res['AllCount'] = $this->allCount;
        }
        if (null !== $this->avgRt) {
            $res['AvgRt'] = $this->avgRt;
        }
        if (null !== $this->avgTps) {
            $res['AvgTps'] = $this->avgTps;
        }
        if (null !== $this->failCountBiz) {
            $res['FailCountBiz'] = $this->failCountBiz;
        }
        if (null !== $this->failCountReq) {
            $res['FailCountReq'] = $this->failCountReq;
        }
        if (null !== $this->seg90Rt) {
            $res['Seg90Rt'] = $this->seg90Rt;
        }
        if (null !== $this->seg99Rt) {
            $res['Seg99Rt'] = $this->seg99Rt;
        }
        if (null !== $this->successRateBiz) {
            $res['SuccessRateBiz'] = $this->successRateBiz;
        }
        if (null !== $this->successRateReq) {
            $res['SuccessRateReq'] = $this->successRateReq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneMetrics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllCount'])) {
            $model->allCount = $map['AllCount'];
        }
        if (isset($map['AvgRt'])) {
            $model->avgRt = $map['AvgRt'];
        }
        if (isset($map['AvgTps'])) {
            $model->avgTps = $map['AvgTps'];
        }
        if (isset($map['FailCountBiz'])) {
            $model->failCountBiz = $map['FailCountBiz'];
        }
        if (isset($map['FailCountReq'])) {
            $model->failCountReq = $map['FailCountReq'];
        }
        if (isset($map['Seg90Rt'])) {
            $model->seg90Rt = $map['Seg90Rt'];
        }
        if (isset($map['Seg99Rt'])) {
            $model->seg99Rt = $map['Seg99Rt'];
        }
        if (isset($map['SuccessRateBiz'])) {
            $model->successRateBiz = $map['SuccessRateBiz'];
        }
        if (isset($map['SuccessRateReq'])) {
            $model->successRateReq = $map['SuccessRateReq'];
        }

        return $model;
    }
}
