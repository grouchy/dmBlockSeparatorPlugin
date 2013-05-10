<?php
/**
 * Description of dmSeparatorWidgetView
 *
 * @author grouchy
 */
class dmBlockSeparatorWidgetView extends dmWidgetPluginView {
    
//    public function configure() {
//        $this->addRequiredVar(array('separator_value', 'custom_separator_value'));
//    }
    
    protected function filterViewVars(array $vars = array()) {
        $vars = parent::filterViewVars($vars);
        
        return $vars;
    }
    
    public function getStylesheets() {
        return array_merge(
                        parent::getStylesheets(), array(
                            'dmBlockSeparatorPlugin.block-separator.less',
                        )
        );
    }
    
}