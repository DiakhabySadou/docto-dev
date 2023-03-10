<?php

class __Mustache_ce333e8b9fa28b4d4b8d55b8a69adc72 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="initialbar ';
        $value = $this->resolveValue($context->find('class'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ' d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '    <span class="initialbarlabel mr-2">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="initialbargroups d-flex flex-wrap justify-content-center justify-content-md-start">
';
        $buffer .= $indent . '        <ul class="pagination pagination-sm">
';
        $value = $context->find('current');
        $buffer .= $this->section6fbf0dbbb6ac06491cdb1f406dd41aeb($context, $indent, $value);
        $value = $context->find('current');
        if (empty($value)) {
            
            $buffer .= $indent . '            <li class="initialbarall page-item active">
';
            $buffer .= $indent . '                <a data-initial="" class="page-link">';
            $value = $this->resolveValue($context->find('all'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</a>
';
            $buffer .= $indent . '            </li>
';
        }
        $buffer .= $indent . '        </ul>
';
        $value = $context->find('group');
        $buffer .= $this->sectionE186537960e3ebfbc5bff343a4441602($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section6fbf0dbbb6ac06491cdb1f406dd41aeb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li class="initialbarall page-item">
                <a data-initial="" class="page-link" href="{{url}}">{{all}}</a>
            </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <li class="initialbarall page-item">
';
                $buffer .= $indent . '                <a data-initial="" class="page-link" href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('all'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f8699c947c04b58f200ec15cb20bf43(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li data-initial="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="page-item active ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><span class="page-link">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ba151ff314a7a660593cfbf8ef85ca3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('selected');
                $buffer .= $this->section9f8699c947c04b58f200ec15cb20bf43($context, $indent, $value);
                $value = $context->find('selected');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <li data-initial="';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="page-item ';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"><a class="page-link" href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('name'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</a></li>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE186537960e3ebfbc5bff343a4441602(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="pagination pagination-sm">
                {{#letter}}
                    {{#selected}}
                        <li data-initial="{{name}}" class="page-item active {{name}}"><span class="page-link">{{name}}</span></li>
                    {{/selected}}
                    {{^selected}}
                        <li data-initial="{{name}}" class="page-item {{name}}"><a class="page-link" href="{{url}}">{{name}}</a></li>
                    {{/selected}}
                {{/letter}}
            </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul class="pagination pagination-sm">
';
                $value = $context->find('letter');
                $buffer .= $this->section8ba151ff314a7a660593cfbf8ef85ca3($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
