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

namespace Google\Service\APIhub;

class GoogleCloudApihubV1ApiOperation extends \Google\Collection
{
  protected $collection_key = 'sourceMetadata';
  protected $attributesType = GoogleCloudApihubV1AttributeValues::class;
  protected $attributesDataType = 'map';
  /**
   * @var string
   */
  public $createTime;
  protected $detailsType = GoogleCloudApihubV1OperationDetails::class;
  protected $detailsDataType = '';
  /**
   * @var string
   */
  public $name;
  protected $sourceMetadataType = GoogleCloudApihubV1SourceMetadata::class;
  protected $sourceMetadataDataType = 'array';
  /**
   * @var string
   */
  public $spec;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param GoogleCloudApihubV1AttributeValues[]
   */
  public function setAttributes($attributes)
  {
    $this->attributes = $attributes;
  }
  /**
   * @return GoogleCloudApihubV1AttributeValues[]
   */
  public function getAttributes()
  {
    return $this->attributes;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param GoogleCloudApihubV1OperationDetails
   */
  public function setDetails(GoogleCloudApihubV1OperationDetails $details)
  {
    $this->details = $details;
  }
  /**
   * @return GoogleCloudApihubV1OperationDetails
   */
  public function getDetails()
  {
    return $this->details;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param GoogleCloudApihubV1SourceMetadata[]
   */
  public function setSourceMetadata($sourceMetadata)
  {
    $this->sourceMetadata = $sourceMetadata;
  }
  /**
   * @return GoogleCloudApihubV1SourceMetadata[]
   */
  public function getSourceMetadata()
  {
    return $this->sourceMetadata;
  }
  /**
   * @param string
   */
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  /**
   * @return string
   */
  public function getSpec()
  {
    return $this->spec;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudApihubV1ApiOperation::class, 'Google_Service_APIhub_GoogleCloudApihubV1ApiOperation');
