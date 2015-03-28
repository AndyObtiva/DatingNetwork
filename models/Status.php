<?php
  namespace app\models;

  use yii\base\Model;

  class Status extends Model
  {
    const PERMISSIONS_PRIVATE = 10;
    const PERMISSIONS_PUBLIC = 20;

    public $text;
    public $permissions;

    public function rules()
    {
      return [
        [['text', 'permissions'], 'required']
      ];
    }

    public static function getAvailablePermissions() 
    {
      return [
        self::PERMISSIONS_PRIVATE => 'Private', 
        self::PERMISSIONS_PUBLIC => 'Public'
      ];
    }
     
    public function getPermissionsLabel() 
    {
      return $this->buildPermissionsLabel($this->permissions);
    }
     
    public function buildPermissionsLabel($permissions) 
    {
      if ($permissions == self::PERMISSIONS_PUBLIC) {
        return 'Public';
      } else {
        return 'Private';        
      }
    }
  }
?>
