<?php
/**
 * @author Jacob Lott <jlott3@cnm.edu>
 */
class Foo {
/**
 * id for this profile; this is the primary key
 */
public $fooId;

    /**
     * @return mixed
     */
    public function getFooId()
    {
        return $this->fooId;
    }
}