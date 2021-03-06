<?php
/**
 * Copyright (c) 2017 Baidu, Inc. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @desc 模版渲染类
 **/

namespace Baidu\Duer\Botsdk\Directive\Display;
use Baidu\Duer\Botsdk\Directive\Display\Template\BaseTemplate;
class RenderTemplate extends \Baidu\Duer\Botsdk\Directive\BaseDirective{

    /**
     * @desc __construct
     * @param BaseTemplate $template
     */
    public function __construct($template = null) {
        parent::__construct('Display.RenderTemplate');
        $this->setTemplate($template);
    }
    
    /**
     * @desc 设置模版类别
     * @param string $templateType 模版类型
     * @return null
     */
    public function setTemplate($template) {
        if($template instanceof BaseTemplate) {
            $this->data['template'] = $template->getData();
        }
    }


}    
