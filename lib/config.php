<?php
	namespace Config;

	//USER DATA
	DEFINE ('DB_USER', '');
	DEFINE ('DB_PSWD', '');
	DEFINE ('DB_HOST', '');
	DEFINE ('DB_NAME', '');

	//COLORS
	$COLORS = array(
		0 => '#FF5656',
		1 => '#FF7000',
		2 => '#FFC200',
		3 => '#52CC00',
		4 => '#19DBCE',
		5 => '#56aaff',
		6 => '#565fff',
		7 => '#9f56ff',
		8 => '#ff56f3'
	);

	//DB DATA
	$DEFAULT_LISTS = array (
		0 => array (
			'ListID' => 0,
			'UserID' => 'default',
			'ListTitle' => 'List Title',
			'ListColor' => $COLORS[1],
		),
		1 => array (
			'ListID' => 1,
			'UserID' => 'default',
			'ListTitle' => 'List Title',
			'ListColor' => $COLORS[2],
		),
		2 => array (
			'ListID' => 2,
			'UserID' => 'default',
			'ListTitle' => 'List Title',
			'ListColor' => $COLORS[3],
		),
		3 => array (
			'ListID' => 3,
			'UserID' => 'default',
			'ListTitle' => 'List Title',
			'ListColor' => $COLORS[4],
		),
		4 => array (
			'ListID' => 4,
			'UserID' => 'default',
			'ListTitle' => 'List Title',
			'ListColor' => $COLORS[5],
		),
	);

	$DEFAULT_LIST_ITEMS_0 = array (
		0 => array (
			'ListItemID' => 0,
			'ListID' => 0,
			'ListItemText' => 'Test1',
			'ListItemDone' => false
		),
		1 => array (
			'ListItemID' => 1,
			'ListID' => 0,
			'ListItemText' => 'Test2',
			'ListItemDone' => false
		),
		2 => array (
			'ListItemID' => 2,
			'ListID' => 0,
			'ListItemText' => 'Test3',
			'ListItemDone' => false
		),
		3 => array (
			'ListItemID' => 3,
			'ListID' => 0,
			'ListItemText' => 'Test4',
			'ListItemDone' => false
		),
		4 => array (
			'ListItemID' => 4,
			'ListID' => 0,
			'ListItemText' => 'Test5',
			'ListItemDone' => false
		),
		5 => array (
			'ListItemID' => 5,
			'ListID' => 0,
			'ListItemText' => 'Test6',
			'ListItemDone' => false
		),
	);

	$DEFAULT_LIST_ITEMS_1 = array (
		0 => array (
			'ListItemID' => 0,
			'ListID' => 1,
			'ListItemText' => 'Test1',
			'ListItemDone' => false
		),
		1 => array (
			'ListItemID' => 1,
			'ListID' => 1,
			'ListItemText' => 'Test2',
			'ListItemDone' => false
		),
		2 => array (
			'ListItemID' => 2,
			'ListID' => 1,
			'ListItemText' => 'Test3',
			'ListItemDone' => false
		),
		3 => array (
			'ListItemID' => 3,
			'ListID' => 1,
			'ListItemText' => 'Test4',
			'ListItemDone' => false
		),
		4 => array (
			'ListItemID' => 4,
			'ListID' => 1,
			'ListItemText' => 'Test5',
			'ListItemDone' => false
		),
	);

	$DEFAULT_LIST_ITEMS_2 = array (
		0 => array (
			'ListItemID' => 0,
			'ListID' => 2,
			'ListItemText' => 'Test1',
			'ListItemDone' => false
		),
		1 => array (
			'ListItemID' => 1,
			'ListID' => 2,
			'ListItemText' => 'Test2',
			'ListItemDone' => false
		),
		2 => array (
			'ListItemID' => 2,
			'ListID' => 2,
			'ListItemText' => 'Test3',
			'ListItemDone' => false
		),
		3 => array (
			'ListItemID' => 3,
			'ListID' => 2,
			'ListItemText' => 'Test4',
			'ListItemDone' => false
		),
		4 => array (
			'ListItemID' => 4,
			'ListID' => 2,
			'ListItemText' => 'Test5',
			'ListItemDone' => false
		),
	);

	$DEFAULT_LIST_ITEMS_3 = array (
		0 => array (
			'ListItemID' => 0,
			'ListID' => 3,
			'ListItemText' => 'Test1',
			'ListItemDone' => false
		),
		1 => array (
			'ListItemID' => 1,
			'ListID' => 3,
			'ListItemText' => 'Test2',
			'ListItemDone' => false
		),
		2 => array (
			'ListItemID' => 2,
			'ListID' => 3,
			'ListItemText' => 'Test3',
			'ListItemDone' => false
		),
		3 => array (
			'ListItemID' => 3,
			'ListID' => 3,
			'ListItemText' => 'Test4',
			'ListItemDone' => false
		),
		4 => array (
			'ListItemID' => 4,
			'ListID' => 3,
			'ListItemText' => 'Test5',
			'ListItemDone' => false
		),
	);

	$DEFAULT_LIST_ITEMS_4 = array (
		0 => array (
			'ListItemID' => 0,
			'ListID' => 3,
			'ListItemText' => 'Test1',
			'ListItemDone' => false
		),
		1 => array (
			'ListItemID' => 1,
			'ListID' => 3,
			'ListItemText' => 'Test2',
			'ListItemDone' => false
		),
		2 => array (
			'ListItemID' => 2,
			'ListID' => 3,
			'ListItemText' => 'Test3',
			'ListItemDone' => false
		),
		3 => array (
			'ListItemID' => 3,
			'ListID' => 3,
			'ListItemText' => 'Test4',
			'ListItemDone' => false
		),
		4 => array (
			'ListItemID' => 4,
			'ListID' => 3,
			'ListItemText' => 'Test5',
			'ListItemDone' => false
		),
	);

	$DEFAULT_LIST_ITEMS = array(
		0 => $DEFAULT_LIST_ITEMS_0,
		1 => $DEFAULT_LIST_ITEMS_1,
		2 => $DEFAULT_LIST_ITEMS_2,
		3 => $DEFAULT_LIST_ITEMS_3,
		4 => $DEFAULT_LIST_ITEMS_4,
	);
?>