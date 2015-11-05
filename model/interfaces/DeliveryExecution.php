<?php
/**  
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 * 
 * Copyright (c) 2015 (original work) Open Assessment Technologies SA;
 *               
 * 
 */
namespace oat\taoFrontOffice\model\interfaces;

use oat\oatbox\user\User;
/**
 * DeliveryExecution interface
 *
 * @author Open Assessment Technologies SA
 * @package taoFrontOffice
 * @license GPL-2.0
 *
 */
interface DeliveryExecution {
    
    const STATE_ACTIVE = 'http://www.tao.lu/Ontologies/TAODelivery.rdf#DeliveryExecutionStatusActive';

    const STATE_FINISHIED = 'http://www.tao.lu/Ontologies/TAODelivery.rdf#DeliveryExecutionStatusFinished';
    
    const STATE_PAUSED = 'http://www.tao.lu/Ontologies/TAODelivery.rdf#DeliveryExecutionStatusPaused';
    
    /**
     * Returns the identifier of the delivery execution
     * 
     * @return string
     */
    public function getId();
    
    /**
     * Retuns a human readable test representation of the delivery execution
     * Should respect the current user's language
     * 
     * @return string
     */
    public function getLabel();
    
    /**
     * Returns when the delivery execution was started
     * 
     * @return string epoch time stamp
     *
     */
    public function getStartTime();
    
    /**
     * Returns when the delivery execution was finished
     * or null if not yet finished
     *
     * @return string epoch time stamp
     */
    public function getFinishTime();

    /**
     * Returns the delivery execution state
     * 
     * @return string 
     */
    public function getState();
    
    /**
     * Updates the state of the delivery execution
     * 
     * @param string $state
     * @return boolean success
     */
    public function setState($state);
    
    /**
     * Returns the delivery associated
     *
     * @return Delivery
     */
    public function getDelivery();
    
    /**
     * Returns the user associated
     *
     * @return User
    */
    public function getUser();
}