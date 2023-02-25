<?php

class __Mustache_5ee8109e6618faf1605b788931abe559 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasmarkettiles');
        $buffer .= $this->sectionDe9e4dad1d8894a9acaec9104509d3d2($context, $indent, $value);

        return $buffer;
    }

    private function sectionCeb7cd96f6a297180e9f1521145bec7c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <img class="marketingimg" src="{{{tileimage}}}" width="100%">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <img class="marketingimg" src="';
                $value = $this->resolveValue($context->find('tileimage'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" width="100%">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc04a29c6ac4588bf89cd6dd40d22cb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="marketbtn">
                    {{{button}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="marketbtn">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf9125aa123c15bb4fe40e056de605bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-md-4 text-center">
        <div class="marketing card">
        
            <div class="card-body market-tile">
            {{#tileimage}}
            <img class="marketingimg" src="{{{tileimage}}}" width="100%">
            {{/tileimage}}
            <div class="feature bg-primary bg-gradient text-white mb-4 mt-n4"><i class="fa fa-{{marketingicon}}"></i></div>
                <div class="marketcontent card-text text-left">
                <h3>{{{title}}}</H3>
                <p>{{{content}}}<p>
                </div>
                {{#hasbutton}}
                <div class="marketbtn">
                    {{{button}}}
                </div>
                {{/hasbutton}}
            </div>
        </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-md-4 text-center">
';
                $buffer .= $indent . '        <div class="marketing card">
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '            <div class="card-body market-tile">
';
                $value = $context->find('tileimage');
                $buffer .= $this->sectionCeb7cd96f6a297180e9f1521145bec7c($context, $indent, $value);
                $buffer .= $indent . '            <div class="feature bg-primary bg-gradient text-white mb-4 mt-n4"><i class="fa fa-';
                $value = $this->resolveValue($context->find('marketingicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></i></div>
';
                $buffer .= $indent . '                <div class="marketcontent card-text text-left">
';
                $buffer .= $indent . '                <h3>';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</H3>
';
                $buffer .= $indent . '                <p>';
                $value = $this->resolveValue($context->find('content'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '<p>
';
                $buffer .= $indent . '                </div>
';
                $value = $context->find('hasbutton');
                $buffer .= $this->sectionBc04a29c6ac4588bf89cd6dd40d22cb3($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section53107c9375e855e773a70c06e071433b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#hastile}}
        <div class="col-md-4 text-center">
        <div class="marketing card">
        
            <div class="card-body market-tile">
            {{#tileimage}}
            <img class="marketingimg" src="{{{tileimage}}}" width="100%">
            {{/tileimage}}
            <div class="feature bg-primary bg-gradient text-white mb-4 mt-n4"><i class="fa fa-{{marketingicon}}"></i></div>
                <div class="marketcontent card-text text-left">
                <h3>{{{title}}}</H3>
                <p>{{{content}}}<p>
                </div>
                {{#hasbutton}}
                <div class="marketbtn">
                    {{{button}}}
                </div>
                {{/hasbutton}}
            </div>
        </div>
        </div>
        {{/hastile}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hastile');
                $buffer .= $this->sectionDf9125aa123c15bb4fe40e056de605bf($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe9e4dad1d8894a9acaec9104509d3d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="markettiles">
    <div class="container-fluid">
    <div class="row">

        {{#markettiles}}
        {{#hastile}}
        <div class="col-md-4 text-center">
        <div class="marketing card">
        
            <div class="card-body market-tile">
            {{#tileimage}}
            <img class="marketingimg" src="{{{tileimage}}}" width="100%">
            {{/tileimage}}
            <div class="feature bg-primary bg-gradient text-white mb-4 mt-n4"><i class="fa fa-{{marketingicon}}"></i></div>
                <div class="marketcontent card-text text-left">
                <h3>{{{title}}}</H3>
                <p>{{{content}}}<p>
                </div>
                {{#hasbutton}}
                <div class="marketbtn">
                    {{{button}}}
                </div>
                {{/hasbutton}}
            </div>
        </div>
        </div>
        {{/hastile}}
        {{/markettiles}}

    </div>
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="markettiles">
';
                $buffer .= $indent . '    <div class="container-fluid">
';
                $buffer .= $indent . '    <div class="row">
';
                $buffer .= $indent . '
';
                $value = $context->find('markettiles');
                $buffer .= $this->section53107c9375e855e773a70c06e071433b($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
