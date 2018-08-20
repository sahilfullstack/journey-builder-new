<template>
    <div class="row">
        <div class="col-sm-12">
            <!-- <label for="text">Your answer</label> -->
            <input type="text" v-model="value.response" @input="emit">
        </div>
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
                value: {
                    response : ''
                }
            }
        },
        methods: {
            emit(event) {
                this.$emit('input', this.value);
            }
        }
    }
</script>

<style scoped>

</style>