<?php namespace Enemies;

use Countable;

class EnemyCollection implements Countable
{
	protected $collection = [];

    public function add($enemy)
    {
    	if(is_array($enemy))
    	{
    		return array_map([$this, 'add'], $enemy);
    	}

        $this->collection[] = $enemy;
    }

    public function count()
    {
    	return count($this->collection);
    }
}
