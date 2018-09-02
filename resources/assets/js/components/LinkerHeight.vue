<template>
    <div class="row">
        <div class="col-sm-6">
            <label>feet</label>
            <input type="number" v-model="response.feet" @input="emit">
        </div>
        <div class="col-sm-6">
            <label>inches</label>
            <input type="number" v-model="response.inches" @input="emit">
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
                response: {
                    feet: (this.value && this.value.feet) || '',
                    inches: (this.value && this.value.inches) || ''
                }
            }
        },
        methods: {
            emit(event) {
                this.$emit('input', this.response);
                if(this.response.feet.length > 0) this.$emit('can-next');
                if(this.response.feet.length == 0) this.$emit('cannot-next');
            }
        }
    }
</script>

<style scoped>

</style>