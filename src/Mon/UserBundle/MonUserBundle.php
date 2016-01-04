<?php

namespace Mon\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MonUserBundle extends Bundle
{

  public function getParent()
  {
      return "FOSUserBundle";
  }
}
