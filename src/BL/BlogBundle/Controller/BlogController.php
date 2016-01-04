<?php

namespace BL\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class BlogController extends Controller

{
 public function indexAction()
 {
     return $this->render("BLBlogBundle:blog:index.html.twig");
 }

}