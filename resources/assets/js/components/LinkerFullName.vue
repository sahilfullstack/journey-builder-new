<template>
    <div class="row">
        <div class="col-sm-6">
            <label>First Name</label>
            <input class="box-input" type="text" v-model="response.first_name" @input="emit">
        </div>
        <div class="col-sm-6">
            <label>Last Name</label>
            <input class="box-input" type="text" v-model="response.last_name" @input="emit">
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
                    first_name: (this.value && this.value.first_name) || '',
                    last_name: (this.value && this.value.last_name) || ''
                }
            }
        },
        methods: {
            emit(event) {
                this.$emit('input', this.response);
                if(this.response.first_name.length > 0) this.$emit('can-next');
                if(this.response.first_name.length == 0) this.$emit('cannot-next');
            }
        }
    }
</script>

<style scoped>

</style>