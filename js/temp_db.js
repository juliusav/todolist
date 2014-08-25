/*
 * Until I implement a database/backend, this will be 
 * a temporary storage for lists and list items
 */

//COLORS
var COLORS = [
  '#FF5656',
  '#FF7000',
  '#FFC200',
  '#52CC00',
  '#19DBCE',
  '#56aaff',
  '#565fff',
  '#9f56ff',
  '#ff56f3'
];

//DB DATA
var list1 = {
  'ListID': 0,
  'UserID': 'default',
  'ListTitle': 'List Title',
  'ListColor': COLORS[1]
};

var list2 = {
  'ListID': 1,
  'UserID': 'default',
  'ListTitle': 'List Title',
  'ListColor': COLORS[2]
};

var list3 = {
  'ListID': 2,
  'UserID': 'default',
  'ListTitle': 'List Title',
  'ListColor': COLORS[3]
};

var list4 = {
  'ListID': 3,
  'UserID': 'default',
  'ListTitle': 'List Title',
  'ListColor': COLORS[4]
};

var DEFAULT_LISTS = [list1, list2, list3, list4];

var listItem1 = [
  {
    'ListItemID': 0,
    'ListID': 0,
    'ListItemText': 'Test1',
    'ListItemDone' :false
  }, {
    'ListItemID': 1,
    'ListID': 0,
    'ListItemText': 'Test2',
    'ListItemDone' :false
  }, {
    'ListItemID': 2,
    'ListID': 0,
    'ListItemText': 'Test3',
    'ListItemDone' :false
  }, {
    'ListItemID': 3,
    'ListID': 0,
    'ListItemText': 'Test4',
    'ListItemDone' :false
  }, {
    'ListItemID': 4,
    'ListID': 0,
    'ListItemText': 'Test5',
    'ListItemDone' :false
  }
];

var listItem2 = [
  {
    'ListItemID': 0,
    'ListID': 1,
    'ListItemText': 'Test1',
    'ListItemDone' :false
  }, {
    'ListItemID': 1,
    'ListID': 1,
    'ListItemText': 'Test2',
    'ListItemDone' :false
  }, {
    'ListItemID': 2,
    'ListID': 1,
    'ListItemText': 'Test3',
    'ListItemDone' :false
  }, {
    'ListItemID': 3,
    'ListID': 1,
    'ListItemText': 'Test4',
    'ListItemDone' :false
  }, {
    'ListItemID': 4,
    'ListID': 1,
    'ListItemText': 'Test5',
    'ListItemDone' :false
  }
];

var listItem3 = [
  {
    'ListItemID': 0,
    'ListID': 2,
    'ListItemText': 'Test1',
    'ListItemDone' :false
  }, {
    'ListItemID': 1,
    'ListID': 2,
    'ListItemText': 'Test2',
    'ListItemDone' :false
  }, {
    'ListItemID': 2,
    'ListID': 2,
    'ListItemText': 'Test3',
    'ListItemDone' :false
  }, {
    'ListItemID': 3,
    'ListID': 2,
    'ListItemText': 'Test4',
    'ListItemDone' :false
  }, {
    'ListItemID': 4,
    'ListID': 2,
    'ListItemText': 'Test5',
    'ListItemDone' :false
  }
];

var listItem4 = [
  {
    'ListItemID': 0,
    'ListID': 3,
    'ListItemText': 'Test1',
    'ListItemDone' :false
  }, {
    'ListItemID': 1,
    'ListID': 3,
    'ListItemText': 'Test2',
    'ListItemDone' :false
  }, {
    'ListItemID': 2,
    'ListID': 3,
    'ListItemText': 'Test3',
    'ListItemDone' :false
  }, {
    'ListItemID': 3,
    'ListID': 3,
    'ListItemText': 'Test4',
    'ListItemDone' :false
  }, {
    'ListItemID': 4,
    'ListID': 3,
    'ListItemText': 'Test5',
    'ListItemDone' :false
  }
];

var DEFAULT_LIST_ITEMS = [listItem1, listItem2, listItem3, listItem4];