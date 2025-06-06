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

namespace Google\Service\CivicInfo;

class CivicinfoApiprotosV2VoterInfoResponse extends \Google\Collection
{
  protected $collection_key = 'state';
  protected $contestsType = CivicinfoSchemaV2Contest::class;
  protected $contestsDataType = 'array';
  protected $dropOffLocationsType = CivicinfoSchemaV2PollingLocation::class;
  protected $dropOffLocationsDataType = 'array';
  protected $earlyVoteSitesType = CivicinfoSchemaV2PollingLocation::class;
  protected $earlyVoteSitesDataType = 'array';
  protected $electionType = CivicinfoSchemaV2Election::class;
  protected $electionDataType = '';
  /**
   * @var string
   */
  public $kind;
  /**
   * @var bool
   */
  public $mailOnly;
  protected $normalizedInputType = CivicinfoSchemaV2SimpleAddressType::class;
  protected $normalizedInputDataType = '';
  protected $otherElectionsType = CivicinfoSchemaV2Election::class;
  protected $otherElectionsDataType = 'array';
  protected $pollingLocationsType = CivicinfoSchemaV2PollingLocation::class;
  protected $pollingLocationsDataType = 'array';
  /**
   * @var string
   */
  public $precinctId;
  protected $precinctsType = CivicinfoSchemaV2Precinct::class;
  protected $precinctsDataType = 'array';
  protected $stateType = CivicinfoSchemaV2AdministrationRegion::class;
  protected $stateDataType = 'array';

  /**
   * @param CivicinfoSchemaV2Contest[]
   */
  public function setContests($contests)
  {
    $this->contests = $contests;
  }
  /**
   * @return CivicinfoSchemaV2Contest[]
   */
  public function getContests()
  {
    return $this->contests;
  }
  /**
   * @param CivicinfoSchemaV2PollingLocation[]
   */
  public function setDropOffLocations($dropOffLocations)
  {
    $this->dropOffLocations = $dropOffLocations;
  }
  /**
   * @return CivicinfoSchemaV2PollingLocation[]
   */
  public function getDropOffLocations()
  {
    return $this->dropOffLocations;
  }
  /**
   * @param CivicinfoSchemaV2PollingLocation[]
   */
  public function setEarlyVoteSites($earlyVoteSites)
  {
    $this->earlyVoteSites = $earlyVoteSites;
  }
  /**
   * @return CivicinfoSchemaV2PollingLocation[]
   */
  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }
  /**
   * @param CivicinfoSchemaV2Election
   */
  public function setElection(CivicinfoSchemaV2Election $election)
  {
    $this->election = $election;
  }
  /**
   * @return CivicinfoSchemaV2Election
   */
  public function getElection()
  {
    return $this->election;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param bool
   */
  public function setMailOnly($mailOnly)
  {
    $this->mailOnly = $mailOnly;
  }
  /**
   * @return bool
   */
  public function getMailOnly()
  {
    return $this->mailOnly;
  }
  /**
   * @param CivicinfoSchemaV2SimpleAddressType
   */
  public function setNormalizedInput(CivicinfoSchemaV2SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }
  /**
   * @return CivicinfoSchemaV2SimpleAddressType
   */
  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }
  /**
   * @param CivicinfoSchemaV2Election[]
   */
  public function setOtherElections($otherElections)
  {
    $this->otherElections = $otherElections;
  }
  /**
   * @return CivicinfoSchemaV2Election[]
   */
  public function getOtherElections()
  {
    return $this->otherElections;
  }
  /**
   * @param CivicinfoSchemaV2PollingLocation[]
   */
  public function setPollingLocations($pollingLocations)
  {
    $this->pollingLocations = $pollingLocations;
  }
  /**
   * @return CivicinfoSchemaV2PollingLocation[]
   */
  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }
  /**
   * @param string
   */
  public function setPrecinctId($precinctId)
  {
    $this->precinctId = $precinctId;
  }
  /**
   * @return string
   */
  public function getPrecinctId()
  {
    return $this->precinctId;
  }
  /**
   * @param CivicinfoSchemaV2Precinct[]
   */
  public function setPrecincts($precincts)
  {
    $this->precincts = $precincts;
  }
  /**
   * @return CivicinfoSchemaV2Precinct[]
   */
  public function getPrecincts()
  {
    return $this->precincts;
  }
  /**
   * @param CivicinfoSchemaV2AdministrationRegion[]
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return CivicinfoSchemaV2AdministrationRegion[]
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CivicinfoApiprotosV2VoterInfoResponse::class, 'Google_Service_CivicInfo_CivicinfoApiprotosV2VoterInfoResponse');
