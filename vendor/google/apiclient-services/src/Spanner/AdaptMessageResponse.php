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

namespace Google\Service\Spanner;

class AdaptMessageResponse extends \Google\Model
{
  /**
   * @var string
   */
  public $payload;
  /**
   * @var string[]
   */
  public $stateUpdates;

  /**
   * @param string
   */
  public function setPayload($payload)
  {
    $this->payload = $payload;
  }
  /**
   * @return string
   */
  public function getPayload()
  {
    return $this->payload;
  }
  /**
   * @param string[]
   */
  public function setStateUpdates($stateUpdates)
  {
    $this->stateUpdates = $stateUpdates;
  }
  /**
   * @return string[]
   */
  public function getStateUpdates()
  {
    return $this->stateUpdates;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AdaptMessageResponse::class, 'Google_Service_Spanner_AdaptMessageResponse');
