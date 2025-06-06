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

namespace Google\Service\Networkconnectivity;

class RejectSpokeUpdateRequest extends \Google\Model
{
  /**
   * @var string
   */
  public $details;
  /**
   * @var string
   */
  public $requestId;
  /**
   * @var string
   */
  public $spokeEtag;
  /**
   * @var string
   */
  public $spokeUri;

  /**
   * @param string
   */
  public function setDetails($details)
  {
    $this->details = $details;
  }
  /**
   * @return string
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * @param string
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
  /**
   * @param string
   */
  public function setSpokeEtag($spokeEtag)
  {
    $this->spokeEtag = $spokeEtag;
  }
  /**
   * @return string
   */
  public function getSpokeEtag()
  {
    return $this->spokeEtag;
  }
  /**
   * @param string
   */
  public function setSpokeUri($spokeUri)
  {
    $this->spokeUri = $spokeUri;
  }
  /**
   * @return string
   */
  public function getSpokeUri()
  {
    return $this->spokeUri;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RejectSpokeUpdateRequest::class, 'Google_Service_Networkconnectivity_RejectSpokeUpdateRequest');
