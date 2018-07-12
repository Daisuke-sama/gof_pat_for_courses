<?php
/**
 * Created by PhpStorm.
 * User: Royal_PC
 * Date: 13-Jul-18
 * Time: 12:43 AM
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

$theArtist = new \GOF\Behavioural\Command\AutoArtist();
print 'An artist has been created.' . PHP_EOL;

$command1 = new \GOF\Behavioural\Command\DrawCommand($theArtist);
$command1->setAShape('circle');
$command2 = new \GOF\Behavioural\Command\DrawCommand($theArtist);
$command2->setAShape('line');
$command3 = new \GOF\Behavioural\Command\DrawCommand($theArtist);
$command3->setAShape('triangle');
$command4 = new \GOF\Behavioural\Command\DrawCommand($theArtist);
$command4->setAShape('WOW!');
$command5 = new \GOF\Behavioural\Command\EraseCommand($theArtist);
$command5->setAShape('WOW!');

$performer = new \GOF\Behavioural\Command\ArtistPerformer();
$performer->addCommand($command1);
$performer->addCommand($command2, $command3);

print 'Perfromer ready to be executed.' . PHP_EOL;
$performer->runCommands();

print 'Performer run the commands. The artist\'s masterpiece contains:' . PHP_EOL;
$theArtist->display();

$performer->addCommand($command4, $command5);
print 'Perfromer ready to be executed again.' . PHP_EOL;
$performer->runCommands();

print 'Performer run the commands. The artist\'s masterpiece should contain result as the previous one:' . PHP_EOL;
$theArtist->display();
