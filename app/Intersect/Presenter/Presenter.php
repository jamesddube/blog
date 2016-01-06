<?php
/**
 * Created by PhpStorm.
 * User: james
 * Date: 1/4/16
 * Time: 12:46 PM
 */

namespace Intersect\Presenter;


trait Presenter
{

    public function present()
    {
        if(! $this->presenter)
        {
            throw new \Exception('set the $presenter');
        }
            return new $this->presenter($this->getAttributes());
    }

}