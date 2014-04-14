<?php
/**
 * Created by PhpStorm.
 * User: bkintanar
 * Date: 2/8/14
 * Time: 5:28 AM
 */

class Group extends Eloquent {

    protected $table = 'groups';

    public static function getPrefix()
    {
        $_user = Auth::user();

        switch($_user->group_id)
        {
            case GROUP_ADMINISTRATOR: return 'a';
            case GROUP_PROFESSOR:     return 'p';
            case GROUP_STUDENT:       return 's';
        }
    }
} 