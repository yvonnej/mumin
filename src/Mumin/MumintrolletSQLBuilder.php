<?php

namespace Mos\Mumin;

class MumintrolletSQLBuilder
{
	// External dependent on mos/cdatabase
	use \Mos\Database\TSQLQueryBuilderBasic;
	
	/**
     * My name is.
     *
     * @return string
     *
     */
    public function getName()
    {
        return "My Name is Mumintrollet.";
    }
}