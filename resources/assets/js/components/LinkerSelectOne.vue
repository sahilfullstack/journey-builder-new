<template>
    
    <div class="horizontal-scroll">
        <selectable-card 
            class="text-center" 
            v-for="(selectable, index) in this.linker.selectables"
            :key="index" :value="index"
            :is-selected="selected.indexOf(index) !== -1"
            @selected="onSelect" @unselected="onUnselect">
            <img class="card-img-top" :src="selectable.data.image_url" v-if="selectable.data.image_url">
            <div class="card-body d-flex align-items-center">
                <p class="m-0">{{ selectable.data.text }}</p>
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
            },
            value: {
                required: true
            }
        },
        data() {
            return {
                selected: this.value || []
            }
        },
        methods: {
            onSelect(value) {
                this.$set(this.selected, 0, value);

                this.$emit('input', this.selected);
                this.$emit('can-next');
            },
            onUnselect(value) {
                let index = this.selected.indexOf(value);
                if (index !== -1) this.selected.splice(index, 1);

                this.$emit('input', this.selected);
                this.$emit('cannot-next');
            }
        }
    }
</script>

<style scoped>

</style>