<?php

$events = Upcoming::getNextEvents();

echo $tpl->render(array(
	'page' => 'allclosed',
	'title' => 'See you soon … somewhere else!',

	'next' => @$events[0],
	'events' => $events,
	'last' => Conferences::getLastConference(),
));
