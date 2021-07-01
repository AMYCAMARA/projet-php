<?php

namespace ism\controllers;

use ism\lib\AbstractController;
use ism\lib\Request;
use ism\models\CoursModel;
use ism\models\UserModel;

/**
 * Undocumented class
 */
class TestController extends AbstractController
{


    public function test(Request $request)
    {
      $userModel = new CoursModel();
      echo"<pre>";
      var_dump($userModel->selectCoursByEtudiant(1));
        echo"</pre>";

    }


}
