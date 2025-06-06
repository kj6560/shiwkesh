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

namespace Google\Service\DisplayVideo;

class AlgorithmRulesFloodlightActivityConversionSignal extends \Google\Model
{
  /**
   * @var string
   */
  public $conversionCounting;
  /**
   * @var string
   */
  public $countingMethod;
  /**
   * @var string
   */
  public $floodlightActivityId;

  /**
   * @param string
   */
  public function setConversionCounting($conversionCounting)
  {
    $this->conversionCounting = $conversionCounting;
  }
  /**
   * @return string
   */
  public function getConversionCounting()
  {
    return $this->conversionCounting;
  }
  /**
   * @param string
   */
  public function setCountingMethod($countingMethod)
  {
    $this->countingMethod = $countingMethod;
  }
  /**
   * @return string
   */
  public function getCountingMethod()
  {
    return $this->countingMethod;
  }
  /**
   * @param string
   */
  public function setFloodlightActivityId($floodlightActivityId)
  {
    $this->floodlightActivityId = $floodlightActivityId;
  }
  /**
   * @return string
   */
  public function getFloodlightActivityId()
  {
    return $this->floodlightActivityId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AlgorithmRulesFloodlightActivityConversionSignal::class, 'Google_Service_DisplayVideo_AlgorithmRulesFloodlightActivityConversionSignal');
