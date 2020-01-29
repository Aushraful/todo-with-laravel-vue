<template>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5 mb-3">ToDo App with Laravel & Vue</h1>
                <div class="card todoList p-3 shadow p-3 mb-5 bg-white rounded">
                    <input type="text" class="todo-input form-control" placeholder="Enter todo here"
                           v-model="newTodo" @keyup.enter="addTodo">
                    <div class="todo-item-box">
                        <todo-item v-for="todo in todosFiltered"
                                   :key="todo.id"
                                   :todo="todo"
                                   :checkAll="!anyRemaining"
                        >
                            &lt;!&ndash;items are being passed from TodoItem.vue&ndash;&gt;
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
        data() {
            return {
                newTodo: '',
                idForTodo: 3,
            }
        },
        computed: {
            anyRemaining() {
                return this.$store.getters.anyRemaining
            },
            todosFiltered() {
                return this.$store.getters.todosFiltered
            }
        },
        methods: {
            addTodo() {
                if (this.newTodo.trim().length == 0) {
                    return
                }
                this.$store.dispatch('addTodo', {
                    id: this.idForTodo,
                    title: this.newTodo,
                })
                this.newTodo = ''
                this.idForTodo++
            },
        }
    }
</script>
