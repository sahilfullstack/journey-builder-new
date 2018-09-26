<template>      
    <div>
        <p-check @change="toggle" class="p-default p-fill" :checked="this.selected ? true : false" color="#77254B">{{this.text}}</p-check>
        <label>{{this.description}}</label>
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