<?php

class __Mustache_af3bbcd5865cb432d8b2d561cfe83d53 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasfpiconnav');
        $buffer .= $this->sectionD4b881c8a5bb98da59446346dbcc9338($context, $indent, $value);

        return $buffer;
    }

    private function section0421ee41d271e06a3ce1b3a99d6255f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="btn btn-secondary">
                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="btn btn-secondary">
';
                $buffer .= $indent . '                    <a role="button" href = ';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' title = "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" target="';
                $value = $this->resolveValue($context->find('linktarget'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <div class="navicon" align="center">
';
                $buffer .= $indent . '                            <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb0b549a270d8e67fa84666d153b07c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#hasicon}}
                <div class="btn btn-secondary">
                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
                {{/hasicon}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasicon');
                $buffer .= $this->section0421ee41d271e06a3ce1b3a99d6255f9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7dd6eded6884931883efd4b621222f8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="btn btn-secondary">
                        <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                            <div class="navicon" align="center">
                                <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                            </div>
                            {{{linktext}}}
                        </a>
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="btn btn-secondary">
';
                $buffer .= $indent . '                        <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"> 
';
                $buffer .= $indent . '                            <div class="navicon" align="center">
';
                $buffer .= $indent . '                                <i class="fa fa-3x fa-';
                $value = $this->resolveValue($context->find('linkicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"></i>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('linktext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section64ebb4b09a201482662bdd3ce746386f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#hasicon}}
                    <div class="btn btn-secondary">
                        <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                            <div class="navicon" align="center">
                                <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                            </div>
                            {{{linktext}}}
                        </a>
                    </div>
                {{/hasicon}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasicon');
                $buffer .= $this->sectionA7dd6eded6884931883efd4b621222f8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF51892a0c605df671e7862eac1117d35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="fpslider" class="collapse text-left">
                {{{slidetextbox}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="fpslider" class="collapse text-left">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('slidetextbox'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4b881c8a5bb98da59446346dbcc9338(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

    <div class="fpstartwrap text-center">
    <div class="fpstart">

        <div class="iconset">
            {{#fpiconnav}}
                {{#hasicon}}
                <div class="btn btn-secondary">
                    <a role="button" href = {{{link}}} title = "{{{linktext}}}" alt="{{{linktext}}}" target="{{linktarget}}">
                        <div class="navicon" align="center">
                            <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                        </div>
                        {{{linktext}}}
                    </a>
                </div>
                {{/hasicon}}
            {{/fpiconnav}}

            {{#fpslideicon}}
                {{#hasicon}}
                    <div class="btn btn-secondary">
                        <a role="button" data-toggle="collapse" href="#fpslider" aria-expanded="false" aria-controls="fpslider" title = "{{{linktext}}}" alt="{{{linktext}}}"> 
                            <div class="navicon" align="center">
                                <i class="fa fa-3x fa-{{{linkicon}}}"></i>
                            </div>
                            {{{linktext}}}
                        </a>
                    </div>
                {{/hasicon}}
            {{/fpslideicon}}
        </div>

    </div>
        {{#hasslidetextbox}}
            <div id="fpslider" class="collapse text-left">
                {{{slidetextbox}}}
            </div>
        {{/hasslidetextbox}}
    </div>

    

    <div style="clear:both;"></div>

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="fpstartwrap text-center">
';
                $buffer .= $indent . '    <div class="fpstart">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <div class="iconset">
';
                $value = $context->find('fpiconnav');
                $buffer .= $this->sectionCb0b549a270d8e67fa84666d153b07c8($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('fpslideicon');
                $buffer .= $this->section64ebb4b09a201482662bdd3ce746386f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('hasslidetextbox');
                $buffer .= $this->sectionF51892a0c605df671e7862eac1117d35($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div style="clear:both;"></div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
