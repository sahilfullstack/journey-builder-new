<template>
    <div class="row">
        <div class="col-sm-12">
            <!-- <label for="text">Your answer</label> -->
            <input class="box-input" type="date" v-model="response" @input="emit">
        </div>
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
                response: this.value || ''
            }
        },
        methods: {
            emit(event) {
                this.$emit('input', this.response);
                if(this.response.length > 0) this.$emit('can-next');
                if(this.response.length == 0) this.$emit('cannot-next');
            }
        }
    }
</script>

<style scoped>

</style>