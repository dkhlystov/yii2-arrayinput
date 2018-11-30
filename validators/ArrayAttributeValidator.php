<?php

namespace dkhlystov\validators;

use yii\validators\Validator;

class ArrayAttributeValidator extends Validator
{

    /**
     * @inheritdoc
     */
    public $message = 'Items validation error.';

    /**
     * @inheritdoc
     */
    public function validateAttribute($model, $attribute)
    {
        $hasError = false;
        foreach ($model->$attribute as $related) {
            if (!$related->validate()) {
                $hasError = true;
            }
        }

        if ($hasError) {
            $model->addError($attribute . '[]', $this->message);
        }
    }

}
