<?php

/**
 * This is the model base class for the table "PendingPacket".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "PendingPacket".
 *
 * Columns in table "PendingPacket" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $deviceID
 * @property string $queueTime
 * @property integer $sequence
 * @property string $packetBytes
 * @property integer $autoDelete
 *
 */
abstract class BasePendingPacket extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'PendingPacket';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, deviceID, queueTime, sequence', 'required'),
            array('sequence, autoDelete', 'numerical', 'integerOnly'=>true),
            array('accountID, deviceID', 'length', 'max'=>32),
            array('queueTime', 'length', 'max'=>10),
            array('packetBytes', 'safe'),
            array('packetBytes, autoDelete', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, deviceID, queueTime, sequence, packetBytes, autoDelete', 'safe', 'on'=>'search'),
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
                'deviceID' => Yii::t('app', 'Device'),
                'queueTime' => Yii::t('app', 'Queue Time'),
                'sequence' => Yii::t('app', 'Sequence'),
                'packetBytes' => Yii::t('app', 'Packet Bytes'),
                'autoDelete' => Yii::t('app', 'Auto Delete'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('deviceID', $this->deviceID, true);
        $criteria->compare('queueTime', $this->queueTime, true);
        $criteria->compare('sequence', $this->sequence);
        $criteria->compare('packetBytes', $this->packetBytes, true);
        $criteria->compare('autoDelete', $this->autoDelete);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}