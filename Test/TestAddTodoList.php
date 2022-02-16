<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Adi");
addTodoList("Ansyah");
addTodoList("Putra");

var_dump($todoList);
