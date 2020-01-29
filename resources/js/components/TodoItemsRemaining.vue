<template>
    <div class="pr-2">{{ remaining }} items left</div>
</template>

<script>
    export default {
        name: 'todo-remaining',
        computed: {
            remaining(){
                return this.$store.getters.remaining
            }
        }
    }
</script>
