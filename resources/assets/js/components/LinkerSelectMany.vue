<template>
    
    <div class="horizontal-scroll">
        <selectable-card v-for="(selectable, index) in this.linker.selectables" :key="index" class="text-center" :value="index" @selected="onSelect" @unselected="onUnselect">
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
                // value is the index of the selectable selected
                let selected = this.linker.selectables[value];
                this.selected.push(selected);

                this.$emit('input', this.selected);
            },
            onUnselect(value) {
                // value is the index of the selectable selected
                let selected = this.linker.selectables[value];
                
                let index = this.selected.indexOf(selected);
                if (index !== -1) this.selected.splice(index, 1);

                this.$emit('input', this.selected);
            }
        }
    }
</script>

<style scoped>

</style>