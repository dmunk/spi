<?php
class HTMLWriter
{
  public function textInput( $fieldName, $fieldLabel, $maxLength, $defaultValue = NULL )
  {
?>
            <li>
              <label for="<?= $fieldName ?>"><?= $fieldLabel ?></label>
              <input type="text" name="<?= $fieldName ?>" id="<?= $fieldName ?>" value="<?= !empty( $defaultValue ) ? $defaultValue : '' ?>" maxlength="<?= $maxLength ?>" />
            </li>
<?php
  }

  public function textArea( $fieldName, $fieldLabel, $defaultValue = NULL )
  {
?>
            <li>
              <label for="<?= $fieldName ?>" style="vertical-align: top;"><?= $fieldLabel ?></label>
              <textarea name="<?= $fieldName ?>" id="<?= $fieldName ?>"><?= !empty( $defaultValue ) ? $defaultValue : '' ?></textarea>
            </li>
<?php
  }
}
?>