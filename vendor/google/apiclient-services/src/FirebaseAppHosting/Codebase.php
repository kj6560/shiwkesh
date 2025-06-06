<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\FirebaseAppHosting;

class Codebase extends \Google\Model
{
  /**
   * @var string
   */
  public $repository;
  /**
   * @var string
   */
  public $rootDirectory;

  /**
   * @param string
   */
  public function setRepository($repository)
  {
    $this->repository = $repository;
  }
  /**
   * @return string
   */
  public function getRepository()
  {
    return $this->repository;
  }
  /**
   * @param string
   */
  public function setRootDirectory($rootDirectory)
  {
    $this->rootDirectory = $rootDirectory;
  }
  /**
   * @return string
   */
  public function getRootDirectory()
  {
    return $this->rootDirectory;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Codebase::class, 'Google_Service_FirebaseAppHosting_Codebase');
