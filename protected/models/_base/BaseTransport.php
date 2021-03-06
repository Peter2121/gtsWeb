<?php

/**
 * This is the model base class for the table "Transport".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Transport".
 *
 * Columns in table "Transport" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $transportID
 * @property string $assocAccountID
 * @property string $assocDeviceID
 * @property string $uniqueID
 * @property string $deviceCode
 * @property string $deviceType
 * @property string $serialNumber
 * @property string $simPhoneNumber
 * @property string $smsEmail
 * @property string $imeiNumber
 * @property string $lastInputState
 * @property integer $ignitionIndex
 * @property string $codeVersion
 * @property string $featureSet
 * @property string $ipAddressValid
 * @property string $ipAddressCurrent
 * @property integer $remotePortCurrent
 * @property integer $listenPortCurrent
 * @property string $pendingPingCommand
 * @property string $lastPingTime
 * @property integer $totalPingCount
 * @property integer $maxPingCount
 * @property integer $expectAck
 * @property string $lastAckCommand
 * @property string $lastAckTime
 * @property integer $supportsDMTP
 * @property integer $supportedEncodings
 * @property integer $unitLimitInterval
 * @property integer $maxAllowedEvents
 * @property string $totalProfileMask
 * @property integer $totalMaxConn
 * @property integer $totalMaxConnPerMin
 * @property string $duplexProfileMask
 * @property integer $duplexMaxConn
 * @property integer $duplexMaxConnPerMin
 * @property string $lastTotalConnectTime
 * @property string $lastDuplexConnectTime
 * @property string $displayName
 * @property string $description
 * @property string $lastUpdateTime
 * @property string $creationTime
 *
 */
abstract class BaseTransport extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Transport';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, transportID', 'required'),
            array('ignitionIndex, remotePortCurrent, listenPortCurrent, totalPingCount, maxPingCount, expectAck, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalMaxConn, totalMaxConnPerMin, duplexMaxConn, duplexMaxConnPerMin', 'numerical', 'integerOnly'=>true),
            array('accountID, transportID, assocAccountID, assocDeviceID, codeVersion, ipAddressCurrent', 'length', 'max'=>32),
            array('uniqueID, displayName', 'length', 'max'=>40),
            array('deviceCode, deviceType, serialNumber, simPhoneNumber, imeiNumber', 'length', 'max'=>24),
            array('smsEmail, featureSet', 'length', 'max'=>64),
            array('lastInputState, lastPingTime, lastAckTime, lastTotalConnectTime, lastDuplexConnectTime, lastUpdateTime, creationTime', 'length', 'max'=>10),
            array('ipAddressValid, description', 'length', 'max'=>128),
            array('pendingPingCommand, lastAckCommand, totalProfileMask, duplexProfileMask', 'safe'),
            array('assocAccountID, assocDeviceID, uniqueID, deviceCode, deviceType, serialNumber, simPhoneNumber, smsEmail, imeiNumber, lastInputState, ignitionIndex, codeVersion, featureSet, ipAddressValid, ipAddressCurrent, remotePortCurrent, listenPortCurrent, pendingPingCommand, lastPingTime, totalPingCount, maxPingCount, expectAck, lastAckCommand, lastAckTime, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalProfileMask, totalMaxConn, totalMaxConnPerMin, duplexProfileMask, duplexMaxConn, duplexMaxConnPerMin, lastTotalConnectTime, lastDuplexConnectTime, displayName, description, lastUpdateTime, creationTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, transportID, assocAccountID, assocDeviceID, uniqueID, deviceCode, deviceType, serialNumber, simPhoneNumber, smsEmail, imeiNumber, lastInputState, ignitionIndex, codeVersion, featureSet, ipAddressValid, ipAddressCurrent, remotePortCurrent, listenPortCurrent, pendingPingCommand, lastPingTime, totalPingCount, maxPingCount, expectAck, lastAckCommand, lastAckTime, supportsDMTP, supportedEncodings, unitLimitInterval, maxAllowedEvents, totalProfileMask, totalMaxConn, totalMaxConnPerMin, duplexProfileMask, duplexMaxConn, duplexMaxConnPerMin, lastTotalConnectTime, lastDuplexConnectTime, displayName, description, lastUpdateTime, creationTime', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'accountID' => Yii::t('app', 'Account'),
                'transportID' => Yii::t('app', 'Transport'),
                'assocAccountID' => Yii::t('app', 'Assoc Account'),
                'assocDeviceID' => Yii::t('app', 'Assoc Device'),
                'uniqueID' => Yii::t('app', 'Unique'),
                'deviceCode' => Yii::t('app', 'Device Code'),
                'deviceType' => Yii::t('app', 'Device Type'),
                'serialNumber' => Yii::t('app', 'Serial Number'),
                'simPhoneNumber' => Yii::t('app', 'Sim Phone Number'),
                'smsEmail' => Yii::t('app', 'Sms Email'),
                'imeiNumber' => Yii::t('app', 'Imei Number'),
                'lastInputState' => Yii::t('app', 'Last Input State'),
                'ignitionIndex' => Yii::t('app', 'Ignition Index'),
                'codeVersion' => Yii::t('app', 'Code Version'),
                'featureSet' => Yii::t('app', 'Feature Set'),
                'ipAddressValid' => Yii::t('app', 'Ip Address Valid'),
                'ipAddressCurrent' => Yii::t('app', 'Ip Address Current'),
                'remotePortCurrent' => Yii::t('app', 'Remote Port Current'),
                'listenPortCurrent' => Yii::t('app', 'Listen Port Current'),
                'pendingPingCommand' => Yii::t('app', 'Pending Ping Command'),
                'lastPingTime' => Yii::t('app', 'Last Ping Time'),
                'totalPingCount' => Yii::t('app', 'Total Ping Count'),
                'maxPingCount' => Yii::t('app', 'Max Ping Count'),
                'expectAck' => Yii::t('app', 'Expect Ack'),
                'lastAckCommand' => Yii::t('app', 'Last Ack Command'),
                'lastAckTime' => Yii::t('app', 'Last Ack Time'),
                'supportsDMTP' => Yii::t('app', 'Supports Dmtp'),
                'supportedEncodings' => Yii::t('app', 'Supported Encodings'),
                'unitLimitInterval' => Yii::t('app', 'Unit Limit Interval'),
                'maxAllowedEvents' => Yii::t('app', 'Max Allowed Events'),
                'totalProfileMask' => Yii::t('app', 'Total Profile Mask'),
                'totalMaxConn' => Yii::t('app', 'Total Max Conn'),
                'totalMaxConnPerMin' => Yii::t('app', 'Total Max Conn Per Min'),
                'duplexProfileMask' => Yii::t('app', 'Duplex Profile Mask'),
                'duplexMaxConn' => Yii::t('app', 'Duplex Max Conn'),
                'duplexMaxConnPerMin' => Yii::t('app', 'Duplex Max Conn Per Min'),
                'lastTotalConnectTime' => Yii::t('app', 'Last Total Connect Time'),
                'lastDuplexConnectTime' => Yii::t('app', 'Last Duplex Connect Time'),
                'displayName' => Yii::t('app', 'Display Name'),
                'description' => Yii::t('app', 'Description'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('transportID', $this->transportID, true);
        $criteria->compare('assocAccountID', $this->assocAccountID, true);
        $criteria->compare('assocDeviceID', $this->assocDeviceID, true);
        $criteria->compare('uniqueID', $this->uniqueID, true);
        $criteria->compare('deviceCode', $this->deviceCode, true);
        $criteria->compare('deviceType', $this->deviceType, true);
        $criteria->compare('serialNumber', $this->serialNumber, true);
        $criteria->compare('simPhoneNumber', $this->simPhoneNumber, true);
        $criteria->compare('smsEmail', $this->smsEmail, true);
        $criteria->compare('imeiNumber', $this->imeiNumber, true);
        $criteria->compare('lastInputState', $this->lastInputState, true);
        $criteria->compare('ignitionIndex', $this->ignitionIndex);
        $criteria->compare('codeVersion', $this->codeVersion, true);
        $criteria->compare('featureSet', $this->featureSet, true);
        $criteria->compare('ipAddressValid', $this->ipAddressValid, true);
        $criteria->compare('ipAddressCurrent', $this->ipAddressCurrent, true);
        $criteria->compare('remotePortCurrent', $this->remotePortCurrent);
        $criteria->compare('listenPortCurrent', $this->listenPortCurrent);
        $criteria->compare('pendingPingCommand', $this->pendingPingCommand, true);
        $criteria->compare('lastPingTime', $this->lastPingTime, true);
        $criteria->compare('totalPingCount', $this->totalPingCount);
        $criteria->compare('maxPingCount', $this->maxPingCount);
        $criteria->compare('expectAck', $this->expectAck);
        $criteria->compare('lastAckCommand', $this->lastAckCommand, true);
        $criteria->compare('lastAckTime', $this->lastAckTime, true);
        $criteria->compare('supportsDMTP', $this->supportsDMTP);
        $criteria->compare('supportedEncodings', $this->supportedEncodings);
        $criteria->compare('unitLimitInterval', $this->unitLimitInterval);
        $criteria->compare('maxAllowedEvents', $this->maxAllowedEvents);
        $criteria->compare('totalProfileMask', $this->totalProfileMask, true);
        $criteria->compare('totalMaxConn', $this->totalMaxConn);
        $criteria->compare('totalMaxConnPerMin', $this->totalMaxConnPerMin);
        $criteria->compare('duplexProfileMask', $this->duplexProfileMask, true);
        $criteria->compare('duplexMaxConn', $this->duplexMaxConn);
        $criteria->compare('duplexMaxConnPerMin', $this->duplexMaxConnPerMin);
        $criteria->compare('lastTotalConnectTime', $this->lastTotalConnectTime, true);
        $criteria->compare('lastDuplexConnectTime', $this->lastDuplexConnectTime, true);
        $criteria->compare('displayName', $this->displayName, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('lastUpdateTime', $this->lastUpdateTime, true);
        $criteria->compare('creationTime', $this->creationTime, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}