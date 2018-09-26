<template>      
    <div style="margin-bottom: 3%;">
        <p-check @change="toggle" class="p-default p-fill option-style" :checked="this.selected ? true : false" color="primary">{{this.text}}</p-check>
        <label class="description-style">*{{this.description}}</label>
    </div>
</template>

<script>
    export default {
        props: {
            value: {
                required: true
            },
            description: {
                required: true
            }, 
            text: {
                required: true
            },
            isSelected: {
                type: Boolean,
                required: true
            }
        },
        watch: {
            isSelected(isSelected) {
                this.selected = isSelected;
            }
        },
        data() {
            return {
                selected: this.isSelected
            }
        },
        methods: {
            toggle() {
                console.log(this.selected);
                if(this.selected) {
                    this.$emit('unselected', this.value);
                } else {
                    this.$emit('selected', this.value);
                }
            }
        }
    }
</script>

<style scoped>

</style>