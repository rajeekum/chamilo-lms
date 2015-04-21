<?php
/* For licensing terms, see /license.txt */

namespace Chamilo\CoreBundle\Component\Editor\CkEditor\Toolbar;

/**
 * TestFreeAnswerStrict toolbar configuration
 * 
 * @package Chamilo\CoreBundle\Component\Editor\CkEditor\Toolbar
 */
class TestFreeAnswerStrict extends Basic
{
    /**
     * @return mixed
     */
    public function getConfig()
    {
        if (api_get_setting('more_buttons_maximized_mode') != 'true') {
            $config['toolbar'] = $this->getNormalToolbar();
        } else {
            $config['toolbar_minToolbar'] = $this->getNormalToolbar();
            $config['toolbar_maxToolbar'] = $this->getNormalToolbar();
        }

        $config['fullPage'] = false;

        $config['extraPlugins'] = 'wordcount';

        $config['wordcount'] = array(
            // Whether or not you want to show the Word Count
            'showWordCount' => true,
            // Whether or not you want to show the Char Count
            'showCharCount' => true,
            // Option to limit the characters in the Editor
            'charLimit' => 'unlimited',
            // Option to limit the words in the Editor
            'wordLimit' => 'unlimited'
        );

        $config['removePlugins'] = 'elementspath';
        //$config['height'] = '200';
        return $config;
    }

    protected function getNormalToolbar()
    {
        return [];
    }

}
