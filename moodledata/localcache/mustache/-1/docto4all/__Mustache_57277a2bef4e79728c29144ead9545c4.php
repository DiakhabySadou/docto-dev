<?php

class __Mustache_57277a2bef4e79728c29144ead9545c4 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="header-maxwidth d-print-none">
';
        $buffer .= $indent . '<div class="headerbuttons">
';
        $value = $context->find('hasmycourses');
        $buffer .= $this->sectionE1f432e5c56d3d39ec3a47e2338b8cd6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hasheaderblocks');
        $buffer .= $this->section9ae5d73c11620faae86d79072dfdd708($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('showenrollinktoteacher');
        $buffer .= $this->sectionFfe9d075101e917cccadf6b9987bf07e($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    <div class="w-100">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        
';
        $buffer .= $indent . '
';
        $value = $context->find('displayheaderblocks');
        $buffer .= $this->section89e9eebfacf35bc83b8ae1d646b07ee8($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex flex-wrap">
';
        $value = $context->find('hasnavbar');
        $buffer .= $this->sectionA70fa2e8cebc6c592aa704a2a8efcdbc($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="ml-auto d-flex">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div id="course-header">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="d-flex align-items-center">
';
        $value = $context->find('welcomemessage');
        if (empty($value)) {
            
            $value = $context->find('contextheader');
            $buffer .= $this->sectionCd04ae1ae86243dbb908afbc22ff3ab4($context, $indent, $value);
        }
        if ($partial = $this->mustache->loadPartial('core/welcome')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '            <div class="header-actions-container ml-auto" data-region="header-actions-container">
';
        $value = $context->find('headeractions');
        $buffer .= $this->sectionDb287c55beec21f926dac256ec27981f($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>
';

        return $buffer;
    }

    private function sectionE1f432e5c56d3d39ec3a47e2338b8cd6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-tooltip="tooltip" data-placement= "right" title="{{{mycourses}}}" class="btn btn-secondary headerbutton mycourses" style="float:right;"><i class="fa-2x fa fa-history mycourses"></i></a>
        <div class="dropdown-menu dropdown-menu-right iconsidebar">
            <h5>{{{mycourses}}}</h5>
            {{{mycoursesmenu}}}
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-tooltip="tooltip" data-placement= "right" title="';
                $value = $this->resolveValue($context->find('mycourses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-secondary headerbutton mycourses" style="float:right;"><i class="fa-2x fa fa-history mycourses"></i></a>
';
                $buffer .= $indent . '        <div class="dropdown-menu dropdown-menu-right iconsidebar">
';
                $buffer .= $indent . '            <h5>';
                $value = $this->resolveValue($context->find('mycourses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('mycoursesmenu'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1abc703d69e1aae54f671fb3067d5fad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursedashbutton, theme_learnr ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' coursedashbutton, theme_learnr ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9ae5d73c11620faae86d79072dfdd708(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="blockpanelbtn">
            <button id="blocksliderbutton" class="btn btn-secondary headerbutton" style="float:right;" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider" title="{{# str }} coursedashbutton, theme_learnr {{/ str }}">
                <i class="fa-2x fa fa-arrows-v" aria-hidden="true"> </i>
            </button>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="blockpanelbtn">
';
                $buffer .= $indent . '            <button id="blocksliderbutton" class="btn btn-secondary headerbutton" style="float:right;" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider" title="';
                $value = $context->find('str');
                $buffer .= $this->section1abc703d69e1aae54f671fb3067d5fad($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <i class="fa-2x fa fa-arrows-v" aria-hidden="true"> </i>
';
                $buffer .= $indent . '            </button>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFfe9d075101e917cccadf6b9987bf07e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="enrollbtn"> 
            <a href="{{{easycodelink}}}" title="{{{easyenrolbtntext}}}" class="btn btn-secondary headerbutton easyenrolbtn" style="float:right;"><i class="fa fa-2x fa-key" aria-hidden="true"></i><span class="sr-only">{{{easyenrolbtntext}}}</span></a>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="enrollbtn"> 
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('easycodelink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('easyenrolbtntext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn btn-secondary headerbutton easyenrolbtn" style="float:right;"><i class="fa fa-2x fa-key" aria-hidden="true"></i><span class="sr-only">';
                $value = $this->resolveValue($context->find('easyenrolbtntext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span></a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section147695589319cd1d0900bbdd11dc2152(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' closecoursedashboard, theme_learnr ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' closecoursedashboard, theme_learnr ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a18434a643f3d74d5bc35638065dbe3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="fp-blocks collapse slidingblockpanel" id="blockslider">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                                <section data-region="blocks-columna" class="hidden-print">
                                    {{{ columnabtn }}}
                                    {{{ columnaregion }}}
                                </section>
                        </div>
                        <div class="col-md-4">
                                <section data-region="blocks-columnb" class="hidden-print">
                                    {{{ columnbbtn }}}
                                    {{{ columnbregion }}}
                                </section>
                        </div>
                        <div class="col-md-4">
                                <section data-region="blocks-columnc" class="hidden-print">
                                    {{{ columncbtn }}}
                                    {{{ columncregion }}}
                                </section>
                        </div>
                    </div>
                </div>
                 <div class="text-center blockpanelbtn">
                <button id="blocksliderbutton" class="btn btn-secondary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider" title="{{# str }} closecoursedashboard, theme_learnr {{/ str }}">
                    <i class="fa-2x fa fa-arrows-v" aria-hidden="true">{{# str }} closecoursedashboard, theme_learnr {{/ str }} </i>
                </button>
            </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="fp-blocks collapse slidingblockpanel" id="blockslider">
';
                $buffer .= $indent . '                <div class="container-fluid">
';
                $buffer .= $indent . '                    <div class="row">
';
                $buffer .= $indent . '                        <div class="col-md-4">
';
                $buffer .= $indent . '                                <section data-region="blocks-columna" class="hidden-print">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columnabtn'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columnaregion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </section>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-md-4">
';
                $buffer .= $indent . '                                <section data-region="blocks-columnb" class="hidden-print">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columnbbtn'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columnbregion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </section>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-md-4">
';
                $buffer .= $indent . '                                <section data-region="blocks-columnc" class="hidden-print">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columncbtn'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('columncregion'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </section>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                 <div class="text-center blockpanelbtn">
';
                $buffer .= $indent . '                <button id="blocksliderbutton" class="btn btn-secondary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider" title="';
                $value = $context->find('str');
                $buffer .= $this->section147695589319cd1d0900bbdd11dc2152($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <i class="fa-2x fa fa-arrows-v" aria-hidden="true">';
                $value = $context->find('str');
                $buffer .= $this->section147695589319cd1d0900bbdd11dc2152($context, $indent, $value);
                $buffer .= ' </i>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89e9eebfacf35bc83b8ae1d646b07ee8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#hasheaderblocks}}
            <div class="fp-blocks collapse slidingblockpanel" id="blockslider">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                                <section data-region="blocks-columna" class="hidden-print">
                                    {{{ columnabtn }}}
                                    {{{ columnaregion }}}
                                </section>
                        </div>
                        <div class="col-md-4">
                                <section data-region="blocks-columnb" class="hidden-print">
                                    {{{ columnbbtn }}}
                                    {{{ columnbregion }}}
                                </section>
                        </div>
                        <div class="col-md-4">
                                <section data-region="blocks-columnc" class="hidden-print">
                                    {{{ columncbtn }}}
                                    {{{ columncregion }}}
                                </section>
                        </div>
                    </div>
                </div>
                 <div class="text-center blockpanelbtn">
                <button id="blocksliderbutton" class="btn btn-secondary blockpanelbutton" type="button" data-toggle="collapse" data-target="#blockslider" aria-expanded="false" aria-controls="blockslider" title="{{# str }} closecoursedashboard, theme_learnr {{/ str }}">
                    <i class="fa-2x fa fa-arrows-v" aria-hidden="true">{{# str }} closecoursedashboard, theme_learnr {{/ str }} </i>
                </button>
            </div>
            </div>
            {{/hasheaderblocks}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hasheaderblocks');
                $buffer .= $this->section9a18434a643f3d74d5bc35638065dbe3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA70fa2e8cebc6c592aa704a2a8efcdbc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div id="page-navbar">
                {{{navbar}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div id="page-navbar">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('navbar'), $context);
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

    private function sectionCd04ae1ae86243dbb908afbc22ff3ab4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="mr-auto">
                        {{{contextheader}}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="mr-auto">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('contextheader'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb287c55beec21f926dac256ec27981f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="header-action ml-2">{{{.}}}</div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="header-action ml-2">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
