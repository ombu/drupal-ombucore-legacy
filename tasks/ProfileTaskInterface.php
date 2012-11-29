<?php

/**
 * @file
 * Interface for a basic profile task.
 */

interface ProfileTaskInterface {
  /**
   * @abstract
   * Populates the settings for this task.
   */
  public function settings();

  /**
   * @abstract
   * Runs any processing related to this task.
   *
   * @return bool
   *   TRUE on successful processing.
   */
  public function process();
}
