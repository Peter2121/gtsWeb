<?php

/**
 * This is the model base class for the table "Driver".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Driver".
 *
 * Columns in table "Driver" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $accountID
 * @property string $driverID
 * @property string $contactPhone
 * @property string $contactEmail
 * @property string $licenseType
 * @property string $licenseNumber
 * @property string $licenseExpire
 * @property string $badgeID
 * @property string $address
 * @property string $birthdate
 * @property string $deviceID
 * @property string $displayName
 * @property string $description
 * @property string $notes
 * @property string $lastUpdateTime
 * @property string $creationTime
 *
 */
abstract class BaseDriver extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'Driver';
    }

    public static function representingColumn() {
        return 'accountID';
    }

    public function rules() {
        return array(
            array('accountID, driverID', 'required'),
            array('accountID, driverID, contactPhone, licenseNumber, badgeID, deviceID', 'length', 'max'=>32),
            array('contactEmail, description', 'length', 'max'=>128),
            array('licenseType', 'length', 'max'=>24),
            array('licenseExpire, birthdate, lastUpdateTime, creationTime', 'length', 'max'=>10),
            array('address', 'length', 'max'=>90),
            array('displayName', 'length', 'max'=>40),
            array('notes', 'safe'),
            array('contactPhone, contactEmail, licenseType, licenseNumber, licenseExpire, badgeID, address, birthdate, deviceID, displayName, description, notes, lastUpdateTime, creationTime', 'default', 'setOnEmpty' => true, 'value' => null),
            array('accountID, driverID, contactPhone, contactEmail, licenseType, licenseNumber, licenseExpire, badgeID, address, birthdate, deviceID, displayName, description, notes, lastUpdateTime, creationTime', 'safe', 'on'=>'search'),
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
                'driverID' => Yii::t('app', 'Driver'),
                'contactPhone' => Yii::t('app', 'Contact Phone'),
                'contactEmail' => Yii::t('app', 'Contact Email'),
                'licenseType' => Yii::t('app', 'License Type'),
                'licenseNumber' => Yii::t('app', 'License Number'),
                'licenseExpire' => Yii::t('app', 'License Expire'),
                'badgeID' => Yii::t('app', 'Badge'),
                'address' => Yii::t('app', 'Address'),
                'birthdate' => Yii::t('app', 'Birthdate'),
                'deviceID' => Yii::t('app', 'Device'),
                'displayName' => Yii::t('app', 'Display Name'),
                'description' => Yii::t('app', 'Description'),
                'notes' => Yii::t('app', 'Notes'),
                'lastUpdateTime' => Yii::t('app', 'Last Update Time'),
                'creationTime' => Yii::t('app', 'Creation Time'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('accountID', $this->accountID, true);
        $criteria->compare('driverID', $this->driverID, true);
        $criteria->compare('contactPhone', $this->contactPhone, true);
        $criteria->compare('contactEmail', $this->contactEmail, true);
        $criteria->compare('licenseType', $this->licenseType, true);
        $criteria->compare('licenseNumber', $this->licenseNumber, true);
        $criteria->compare('licenseExpire', $this->licenseExpire, true);
        $criteria->compare('badgeID', $this->badgeID, true);
        $criteria->compare('address', $this->address, true);
        $criteria->compare('birthdate', $this->birthdate, true);
        $criteria->compare('deviceID', $this->deviceID, true);
        $criteria->compare('displayName', $this->displayName, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('notes', $this->notes, true);
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