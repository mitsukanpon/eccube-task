<?php

namespace Customize\Controller\Recruit;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * 「採用」ページのコントローラークラス.
 * 
 */
class index
{
  public function __construct()
  {
  }

  /**
   * 初期ページ表示.
   * 
   * @Method("GET")
   * @Route("user_data/recruit", name="recruit")
   * @Template("user_data/recruit.twig")
   */
  public function recruitInit()
  {
    return [];
  }
}
