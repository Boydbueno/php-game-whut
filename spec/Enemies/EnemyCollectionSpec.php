<?php

namespace spec\Enemies;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Enemies\EnemyAbstract;

class EnemyCollectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Enemies\EnemyCollection');
    }

    function it_stores_a_collection_of_enemies(EnemyAbstract $enemy)
    {
    	$this->add($enemy);

    	$this->shouldHaveCount(1);
    }

    function it_can_store_multiple_enemies_in_one_go(EnemyAbstract $enemy1, EnemyAbstract $enemy2)
    {
    	$this->add([$enemy1, $enemy2]);

    	$this->shouldHaveCount(2);
    }
}