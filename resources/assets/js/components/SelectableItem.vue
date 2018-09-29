<template>      
    <div style="margin-bottom: 5%;">
        <label class="checkbox-container">
            <div class="card" v-if="this.image != null">
                <img class="card-img-top" width="400" :src="this.image">
                <div class="card-body d-flex align-items-center">
                    <p class="m-0">{{this.text}}</p>
                </div>              
            </div>
            <div v-if="this.image == null">
                {{this.text}}
            </div>
            <input :checked="this.selected ? true : false" @change="toggle" type="checkbox">
            <span class="checkmark"></span>
            <label v-if="this.description != null" class="description-style">*{{this.description}}</label>
        </label>
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
            image: {
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


