<template>
    <div class="row">
        <div class="col-sm-12">
            <!-- <label for="text">First Name</label> -->
            <input type="number"v-model="value.response" @input="emit">
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