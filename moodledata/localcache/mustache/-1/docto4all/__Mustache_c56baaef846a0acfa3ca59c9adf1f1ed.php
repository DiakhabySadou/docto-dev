<?php

class __Mustache_c56baaef846a0acfa3ca59c9adf1f1ed extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hasprogressbar');
        $buffer .= $this->section6e9f7e167832ad3f12c61b027274bf92($context, $indent, $value);

        return $buffer;
    }

    private function section0293e8a3f68f0093fe0cb72d27aa2c88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria:courseprogress, block_myoverview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria:courseprogress, block_myoverview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40804337c26cc0f8abadecb458d6edc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'myprogresspercentage, theme_learnr';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'myprogresspercentage, theme_learnr';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0fd85e90fa2c75a79b3d0ea1e905692(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	<div class="progress courseview">
	    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{progress}}" style= "width: {{progress}}%" aria-valuemin="0" aria-valuemax="100"> 
	    	<div class="small">
			    <span class="sr-only">{{#str}}aria:courseprogress, block_myoverview{{/str}}</span>
			    <strong>{{progress}}{{#str}}myprogresspercentage, theme_learnr{{/str}} </strong>
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
                
                $buffer .= $indent . '	<div class="progress courseview">
';
                $buffer .= $indent . '	    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style= "width: ';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '%" aria-valuemin="0" aria-valuemax="100"> 
';
                $buffer .= $indent . '	    	<div class="small">
';
                $buffer .= $indent . '			    <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section0293e8a3f68f0093fe0cb72d27aa2c88($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '			    <strong>';
                $value = $this->resolveValue($context->find('progress'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('str');
                $buffer .= $this->section40804337c26cc0f8abadecb458d6edc5($context, $indent, $value);
                $buffer .= ' </strong>
';
                $buffer .= $indent . '			</div>
';
                $buffer .= $indent . '	    </div>
';
                $buffer .= $indent . '	</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e9f7e167832ad3f12c61b027274bf92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	{{#progress}}
	<div class="progress courseview">
	    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="{{progress}}" style= "width: {{progress}}%" aria-valuemin="0" aria-valuemax="100"> 
	    	<div class="small">
			    <span class="sr-only">{{#str}}aria:courseprogress, block_myoverview{{/str}}</span>
			    <strong>{{progress}}{{#str}}myprogresspercentage, theme_learnr{{/str}} </strong>
			</div>
	    </div>
	</div>
	{{/progress}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('progress');
                $buffer .= $this->sectionD0fd85e90fa2c75a79b3d0ea1e905692($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
