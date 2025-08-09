<?php
// Repository: php-task-manager
// Description: An object-oriented task manager for tracking tasks.

class Task {
    public $id;
    public $title;
    public $completed;

    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
        $this->completed = false;
    }

    public function markAsCompleted() {
        $this->completed = true;
    }
}

class TaskManager {
    private $tasks = [];

    public function addTask($title) {
        $id = count($this->tasks) + 1;
        $this->tasks[] = new Task($id, $title);
    }

    public function listTasks() {
        foreach ($this->tasks as $task) {
            $status = $task->completed ? "Completed" : "Pending";
            echo "ID: {$task->id}, Title: {$task->title}, Status: $status\n";
        }
    }

    public function completeTask($id) {
        foreach ($this->tasks as $task) {
            if ($task->id == $id) {
                $task->markAsCompleted();
                return;
            }
        }
        echo "Task not found.\n";
    }
}

$manager = new TaskManager();
$manager->addTask("Learn PHP");
$manager->addTask("Build a project");
$manager->completeTask(1);
$manager->listTasks();
?>
