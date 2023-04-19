<?php

use CodeZero\UniqueTranslation\UniqueTranslationRule;

function uniqueValidation($table, $column, $id){
    return UniqueTranslationRule::for($table,$column)->ignore($id);
}
