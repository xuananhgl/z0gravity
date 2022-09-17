<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\Table;
use Cake\Utility\Text;
use Cake\Validation\Validator;
class PoursTable extends Table
{
    public function initialize(array $config)
    {  
        $this->addBehavior('Translate', [
            'fields' => ['title','Notre_engagement','about_notre','note', 'logo'],
            'translationTable' => 'PoursI18n', 
            'allowEmptyTranslations' => false 
            
            
        ]);
        $this->setPrimaryKey('id');

        }
}