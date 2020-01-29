<template>
    <div>
        <label for="checkAll" class="checkAllLabel">
            <input type="checkbox" id="checkAll" :checked="!anyRemaining"
                   @change="allChecked">
            Check All
        </label>
    </div>
</template>

<script>
    export default {
        name: 'todo-check-all',
        computed: {
            anyRemaining() {
                return this.$store.getters.anyRemaining
            }
        },
        methods: {
            allChecked() {
                this.$store.dispatch('checkAll', event.target.checked)
            }
        }
    }
</script>
