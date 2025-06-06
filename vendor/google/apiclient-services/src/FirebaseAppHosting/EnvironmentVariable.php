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

class EnvironmentVariable extends \Google\Collection
{
  protected $collection_key = 'availability';
  /**
   * @var string[]
   */
  public $availability;
  /**
   * @var string
   */
  public $secret;
  /**
   * @var string
   */
  public $value;
  /**
   * @var string
   */
  public $variable;

  /**
   * @param string[]
   */
  public function setAvailability($availability)
  {
    $this->availability = $availability;
  }
  /**
   * @return string[]
   */
  public function getAvailability()
  {
    return $this->availability;
  }
  /**
   * @param string
   */
  public function setSecret($secret)
  {
    $this->secret = $secret;
  }
  /**
   * @return string
   */
  public function getSecret()
  {
    return $this->secret;
  }
  /**
   * @param string
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @return string
   */
  public function getValue()
  {
    return $this->value;
  }
  /**
   * @param string
   */
  public function setVariable($variable)
  {
    $this->variable = $variable;
  }
  /**
   * @return string
   */
  public function getVariable()
  {
    return $this->variable;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(EnvironmentVariable::class, 'Google_Service_FirebaseAppHosting_EnvironmentVariable');
