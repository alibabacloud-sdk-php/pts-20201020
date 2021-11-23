<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest;

use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene\dnsCacheConfig;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene\fileList;
use AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene\JMeterProperties;
use AlibabaCloud\Tea\Model;

class openJMeterScene extends Model
{
    /**
     * @description 施压引擎数量
     *
     * @var int
     */
    public $agentCount;

    /**
     * @description 最大并发
     *
     * @var int
     */
    public $concurrency;

    /**
     * @description constantThroughputTimerType
     *
     * @var string
     */
    public $constantThroughputTimers;

    /**
     * @description DNS配置
     *
     * @var dnsCacheConfig
     */
    public $dnsCacheConfig;

    /**
     * @description 压测持续时间
     *
     * @var int
     */
    public $duration;

    /**
     * @description 关联的环境id
     *
     * @var string
     */
    public $enviromentId;

    /**
     * @description 文件列表
     *
     * @var fileList[]
     */
    public $fileList;

    /**
     * @description 是否为VPC测试，默认为false表示公网测试，此值为true时VPC相关配置才生效
     *
     * @var bool
     */
    public $isVpcTest;

    /**
     * @description Jmeter属性
     *
     * @var JMeterProperties[]
     */
    public $JMeterProperties;

    /**
     * @description 预热时间
     *
     * @var int
     */
    public $rampUp;

    /**
     * @description region的id，VPC压测时配置
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 场景ID
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description 场景名
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description 安全组id，VPC压测时配置
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 预热阶段
     *
     * @var int
     */
    public $steps;

    /**
     * @description synchronizing timer 类型
     *
     * @var string
     */
    public $syncTimers;

    /**
     * @description 测试文件
     *
     * @var string
     */
    public $testFile;

    /**
     * @description 交换机id，VPC压测时配置
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description vpc的id，VPC压测时配置
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'agentCount'               => 'AgentCount',
        'concurrency'              => 'Concurrency',
        'constantThroughputTimers' => 'ConstantThroughputTimers',
        'dnsCacheConfig'           => 'DnsCacheConfig',
        'duration'                 => 'Duration',
        'enviromentId'             => 'EnviromentId',
        'fileList'                 => 'FileList',
        'isVpcTest'                => 'IsVpcTest',
        'JMeterProperties'         => 'JMeterProperties',
        'rampUp'                   => 'RampUp',
        'regionId'                 => 'RegionId',
        'sceneId'                  => 'SceneId',
        'sceneName'                => 'SceneName',
        'securityGroupId'          => 'SecurityGroupId',
        'steps'                    => 'Steps',
        'syncTimers'               => 'SyncTimers',
        'testFile'                 => 'TestFile',
        'vSwitchId'                => 'VSwitchId',
        'vpcId'                    => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentCount) {
            $res['AgentCount'] = $this->agentCount;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->constantThroughputTimers) {
            $res['ConstantThroughputTimers'] = $this->constantThroughputTimers;
        }
        if (null !== $this->dnsCacheConfig) {
            $res['DnsCacheConfig'] = null !== $this->dnsCacheConfig ? $this->dnsCacheConfig->toMap() : null;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->enviromentId) {
            $res['EnviromentId'] = $this->enviromentId;
        }
        if (null !== $this->fileList) {
            $res['FileList'] = [];
            if (null !== $this->fileList && \is_array($this->fileList)) {
                $n = 0;
                foreach ($this->fileList as $item) {
                    $res['FileList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->isVpcTest) {
            $res['IsVpcTest'] = $this->isVpcTest;
        }
        if (null !== $this->JMeterProperties) {
            $res['JMeterProperties'] = [];
            if (null !== $this->JMeterProperties && \is_array($this->JMeterProperties)) {
                $n = 0;
                foreach ($this->JMeterProperties as $item) {
                    $res['JMeterProperties'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rampUp) {
            $res['RampUp'] = $this->rampUp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->steps) {
            $res['Steps'] = $this->steps;
        }
        if (null !== $this->syncTimers) {
            $res['SyncTimers'] = $this->syncTimers;
        }
        if (null !== $this->testFile) {
            $res['TestFile'] = $this->testFile;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openJMeterScene
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentCount'])) {
            $model->agentCount = $map['AgentCount'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['ConstantThroughputTimers'])) {
            $model->constantThroughputTimers = $map['ConstantThroughputTimers'];
        }
        if (isset($map['DnsCacheConfig'])) {
            $model->dnsCacheConfig = dnsCacheConfig::fromMap($map['DnsCacheConfig']);
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['EnviromentId'])) {
            $model->enviromentId = $map['EnviromentId'];
        }
        if (isset($map['FileList'])) {
            if (!empty($map['FileList'])) {
                $model->fileList = [];
                $n               = 0;
                foreach ($map['FileList'] as $item) {
                    $model->fileList[$n++] = null !== $item ? fileList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IsVpcTest'])) {
            $model->isVpcTest = $map['IsVpcTest'];
        }
        if (isset($map['JMeterProperties'])) {
            if (!empty($map['JMeterProperties'])) {
                $model->JMeterProperties = [];
                $n                       = 0;
                foreach ($map['JMeterProperties'] as $item) {
                    $model->JMeterProperties[$n++] = null !== $item ? JMeterProperties::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RampUp'])) {
            $model->rampUp = $map['RampUp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Steps'])) {
            $model->steps = $map['Steps'];
        }
        if (isset($map['SyncTimers'])) {
            $model->syncTimers = $map['SyncTimers'];
        }
        if (isset($map['TestFile'])) {
            $model->testFile = $map['TestFile'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
