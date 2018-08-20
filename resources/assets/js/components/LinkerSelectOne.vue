<template>
    
    <div class="horizontal-scroll">
        <selectable-card 
            class="text-center" 
            v-for="(selectable, index) in this.linker.selectables"
            :key="index" :value="index"
            :is-selected="selected.indexOf(index) !== -1"
            @selected="onSelect" @unselected="onUnselect">
            <div class="card-body">
                <h5 class="card-title">{{ selectable.data.text }}</h5>
            </div>
        </selectable-card>
    </div>

</template>

<script>
    export default {
        props: {
            linker: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                selected: []
            }
        },
        methods: {
            onSelect(value) {
                this.$set(this.selected, 0, value);

                this.$emit('input', this.selected);
            },
            onUnselect(value) {
                let index = this.selected.indexOf(value);
                if (index !== -1) this.selected.splice(index, 1);

                this.$emit('input', this.selected);
            }
        }
    }
</script>

<style scoped>

</style>