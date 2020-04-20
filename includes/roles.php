<?php
/**
 * Register roles
 */

/**
 * Register Task Logger role.
 */
function taskbook_register_role() {
    add_role( 'task_logger', 'Task Logger' );
}

/**
 * Remove Task Logger role.
 */
function taskbook_remove_role() {
    remove_role( 'task_logger', 'Task Logger' );
}

/**
 * Grant Task-level capabilities to Administrator, Editor, and Task Logger.
 */
function taskbook_add_capabilities() {
    
}