<?php

namespace Customize\Controller\Faq;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

/**
 * 「よくあるご質問」ページのコントローラークラス.
 */
class index
{
  // Your code here

  public function __construct()
  {
  }

  /**
   * 初期ページ表示.
   * 
   * @Method("GET") 
   * @Route("user_data/faq", name="faq")
   * @Template("user_data/faq.twig")
   */
  public function faqInit()
  {

    return [];
  }
}
