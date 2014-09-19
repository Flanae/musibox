<?php

namespace Afpa\ArtisteBundle\Twig\Extension;
 
class PopuplusExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'popuplus' => new \Twig_Filter_Method($this, 'popularite_plus')
        );
    }
 
    public function popularite_plus($value)
    {
		$new_value = $value + 10;
        if ($new_value > 100) $value = 100;
        else $value = $new_value;
        return $value;
    }
 
    public function getName()
    {
        return 'popuplus_extension';
    }
 
}