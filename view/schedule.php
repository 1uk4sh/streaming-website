<?php

echo $tpl->render(array(
	'page' => 'schedule',
	'title' => 'Schedule-Übersicht',

	'refresh' => 15*60,
	'schedule' => $conference->getSchedule(),
));
