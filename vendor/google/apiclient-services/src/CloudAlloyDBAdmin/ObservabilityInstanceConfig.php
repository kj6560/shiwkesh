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

namespace Google\Service\CloudAlloyDBAdmin;

class ObservabilityInstanceConfig extends \Google\Model
{
  /**
   * @var bool
   */
  public $enabled;
  /**
   * @var int
   */
  public $maxQueryStringLength;
  /**
   * @var bool
   */
  public $preserveComments;
  /**
   * @var int
   */
  public $queryPlansPerMinute;
  /**
   * @var bool
   */
  public $recordApplicationTags;
  /**
   * @var bool
   */
  public $trackActiveQueries;
  /**
   * @var bool
   */
  public $trackWaitEventTypes;
  /**
   * @var bool
   */
  public $trackWaitEvents;

  /**
   * @param bool
   */
  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }
  /**
   * @return bool
   */
  public function getEnabled()
  {
    return $this->enabled;
  }
  /**
   * @param int
   */
  public function setMaxQueryStringLength($maxQueryStringLength)
  {
    $this->maxQueryStringLength = $maxQueryStringLength;
  }
  /**
   * @return int
   */
  public function getMaxQueryStringLength()
  {
    return $this->maxQueryStringLength;
  }
  /**
   * @param bool
   */
  public function setPreserveComments($preserveComments)
  {
    $this->preserveComments = $preserveComments;
  }
  /**
   * @return bool
   */
  public function getPreserveComments()
  {
    return $this->preserveComments;
  }
  /**
   * @param int
   */
  public function setQueryPlansPerMinute($queryPlansPerMinute)
  {
    $this->queryPlansPerMinute = $queryPlansPerMinute;
  }
  /**
   * @return int
   */
  public function getQueryPlansPerMinute()
  {
    return $this->queryPlansPerMinute;
  }
  /**
   * @param bool
   */
  public function setRecordApplicationTags($recordApplicationTags)
  {
    $this->recordApplicationTags = $recordApplicationTags;
  }
  /**
   * @return bool
   */
  public function getRecordApplicationTags()
  {
    return $this->recordApplicationTags;
  }
  /**
   * @param bool
   */
  public function setTrackActiveQueries($trackActiveQueries)
  {
    $this->trackActiveQueries = $trackActiveQueries;
  }
  /**
   * @return bool
   */
  public function getTrackActiveQueries()
  {
    return $this->trackActiveQueries;
  }
  /**
   * @param bool
   */
  public function setTrackWaitEventTypes($trackWaitEventTypes)
  {
    $this->trackWaitEventTypes = $trackWaitEventTypes;
  }
  /**
   * @return bool
   */
  public function getTrackWaitEventTypes()
  {
    return $this->trackWaitEventTypes;
  }
  /**
   * @param bool
   */
  public function setTrackWaitEvents($trackWaitEvents)
  {
    $this->trackWaitEvents = $trackWaitEvents;
  }
  /**
   * @return bool
   */
  public function getTrackWaitEvents()
  {
    return $this->trackWaitEvents;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ObservabilityInstanceConfig::class, 'Google_Service_CloudAlloyDBAdmin_ObservabilityInstanceConfig');
