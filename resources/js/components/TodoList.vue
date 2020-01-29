<template>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5 mb-3">ToDo App with Laravel & Vue</h1>
                <div class="card todoList p-3 shadow p-3 mb-5 bg-white rounded">
                    <input type="text" class="todo-input form-control" placeholder="Enter todo here">
                    <div class="todo-item-box">

                        <todo-item>
                            <!--items are being passed from TodoItem.vue-->
                        </todo-item>
                        <div class="extra-container">
                            <todo-check-all></todo-check-all>
                            <todo-items-remaining></todo-items-remaining>
                        </div>
                        <div class="extra-container">
                            <todo-filtered></todo-filtered>
                            <todo-clear-completed></todo-clear-completed>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import TodoItem from './TodoItem'
    import TodoItemsRemaining from './TodoItemsRemaining'
    import TodoCheckAll from './TodoCheckAll'
    import TodoFiltered from './TodoFiltered'
    import TodoClearCompleted from './TodoClearCompleted'

    export default {
        name: 'todo-list',
        components: {
            TodoItem,
            TodoItemsRemaining,
            TodoCheckAll,
            TodoFiltered,
            TodoClearCompleted,
        },
    }
</script>

