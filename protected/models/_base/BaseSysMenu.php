<?php

/**
 * This is the model base class for the table "sys_menu".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "SysMenu".
 *
 * Columns in table "sys_menu" available as properties of the model,
 * and there are no model relations.
 *
 * @property string $id
 * @property string $root
 * @property string $lft
 * @property string $rgt
 * @property integer $level
 * @property string $label
 * @property string $url
 * @property string $params
 * @property string $ajaxoptions
 * @property string $htmloptions
 * @property integer $is_visible
 * @property string $group_code
 * @property string $label_en
 * @property string $link_to
 *
 */
abstract class BaseSysMenu extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'sys_menu';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'SysMenu|SysMenus', $n);
	}

	public static function representingColumn() {
		return 'label';
	}

	public function rules() {
		return array(
			array('lft, rgt, level, label', 'required'),
			array('level, is_visible', 'numerical', 'integerOnly'=>true),
			array('root, lft, rgt', 'length', 'max'=>10),
			array('label, url', 'length', 'max'=>255),
			array('group_code', 'length', 'max'=>25),
			array('label_en', 'length', 'max'=>125),
			array('link_to', 'length', 'max'=>60),
			array('params, ajaxoptions, htmloptions', 'safe'),
			array('root, url, params, ajaxoptions, htmloptions, is_visible, group_code, label_en, link_to', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, root, lft, rgt, level, label, url, params, ajaxoptions, htmloptions, is_visible, group_code, label_en, link_to', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'root' => Yii::t('app', 'Root'),
			'lft' => Yii::t('app', 'Lft'),
			'rgt' => Yii::t('app', 'Rgt'),
			'level' => Yii::t('app', 'Level'),
			'label' => Yii::t('app', 'Label'),
			'url' => Yii::t('app', 'Url'),
			'params' => Yii::t('app', 'Params'),
			'ajaxoptions' => Yii::t('app', 'Ajaxoptions'),
			'htmloptions' => Yii::t('app', 'Htmloptions'),
			'is_visible' => Yii::t('app', 'Is Visible'),
			'group_code' => Yii::t('app', 'Group Code'),
			'label_en' => Yii::t('app', 'Label En'),
			'link_to' => Yii::t('app', 'Link To'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id, true);
		$criteria->compare('root', $this->root, true);
		$criteria->compare('lft', $this->lft, true);
		$criteria->compare('rgt', $this->rgt, true);
		$criteria->compare('level', $this->level);
		$criteria->compare('label', $this->label, true);
		$criteria->compare('url', $this->url, true);
		$criteria->compare('params', $this->params, true);
		$criteria->compare('ajaxoptions', $this->ajaxoptions, true);
		$criteria->compare('htmloptions', $this->htmloptions, true);
		$criteria->compare('is_visible', $this->is_visible);
		$criteria->compare('group_code', $this->group_code, true);
		$criteria->compare('label_en', $this->label_en, true);
		$criteria->compare('link_to', $this->link_to, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}