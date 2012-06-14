<?php
/**
 * Created by JetBrains PhpStorm.
 * User: jrgregory
 * Date: 14.06.12
 * Time: 15:02
 * To change this template use File | Settings | File Templates.
 */
class ModuleCeWrapper_BZ extends ContentElement
{
    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_accordion';


    /**
     * Generate the content element
     */
    protected function compile()
    {
        if ($this->ceWrapperType == 'begin')
        {
            if (TL_MODE == 'FE')
            {
                $this->strTemplate = 'ce_wrapperBz_begin';
                $this->Template = new FrontendTemplate($this->strTemplate);
                $this->Template->setData($this->arrData);
            }
            else
            {
                $this->strTemplate = 'be_wildcard';
                $this->Template = new BackendTemplate($this->strTemplate);
                $this->Template->wildcard = '### WRAPPER BZ START ###';
            }
        } else if ($this->ceWrapperType == 'end') {
            if (TL_MODE == 'FE')
            {
                $this->strTemplate = 'ce_wrapperBz_end';
                $this->Template = new FrontendTemplate($this->strTemplate);
                $this->Template->setData($this->arrData);
            }
            else
            {
                $this->strTemplate = 'be_wildcard';
                $this->Template = new BackendTemplate($this->strTemplate);
                $this->Template->wildcard = '### WRAPPER BZ STOP ###';
            }
        }
    }
}
