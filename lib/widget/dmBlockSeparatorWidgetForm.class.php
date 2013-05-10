<?php
/**
 * Description of dmSeparatorWidgetForm
 *
 * @author grouchy
 */
class dmBlockSeparatorWidgetForm extends dmWidgetPluginForm {

    public function configure() {
        
        $separator = array (
        '' => '',
        '.block-separator.h10px' => '10px',
        '.block-separator.h20px' => '20px',
        '.block-separator.h30px' => '30px',
        '.block-separator.h40px' => '40px',
        '.block-separator.h50px' => '50px',
        '.block-separator.h60px' => '60px',
        '.block-separator.h70px' => '70px',
        '.block-separator.h80px' => '80px',
        '.block-separator.h90px' => '90px',
        '.block-separator.h100px' => '100px'
        );
        
        $this->widgetSchema['separator_value'] = new sfWidgetFormChoice(array(
            'choices' => $separator,
            'multiple' => false,
            'expanded' => false
        ));
        $this->validatorSchema['separator_value'] = new sfValidatorChoice(array(
            'choices' => array_keys($separator),
            'required' => false
        ));
        
        $this->widgetSchema['custom_separator_value'] = new sfWidgetFormInputText();
        $this->validatorSchema['custom_separator_value'] = new sfValidatorInteger(array(
            'required' => false,
            'min' => 1,
            'max' => 1000
        ));
        
        // Labels
        $this->getWidget("separator_value")->setLabel("Choose separator value: ");
        $this->getWidget("custom_separator_value")->setLabel("Custom value: ");
        
        $this->widgetSchema->setHelps(array(
            'custom_separator_value' => '&#09;Enter value from 1 to 1000 pixels'
        ));
    }
    
}