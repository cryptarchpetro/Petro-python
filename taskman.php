<?php
// Repository: php-task-manager
// New Feature: Search tasks by title

public function searchTasks($keyword) {
    $results = [];
    foreach ($this->tasks as $task) {
        if (stripos($task->title, $keyword) !== false) {
            $results[] = $task;
        }
    }
    return $results;
}

// Example usage
$searchResults = $manager->searchTasks("PHP");
foreach ($searchResults as $task) {
    echo "ID: {$task->id}, Title: {$task->title}\n";
}
?>
