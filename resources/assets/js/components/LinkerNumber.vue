<template>
    <div class="row">
        <div class="col-sm-12">
            <!-- <label for="text">First Name</label> -->
            <input type="number" v-model="value" @input="emit">
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
                value: this.value || ''
            }
        },
        methods: {
            emit(event) {
                this.$emit('input', this.value);
                if(this.value.length > 0) this.$emit('can-next');
                if(this.value.length == 0) this.$emit('cannot-next');            }
        }
    }
</script>

<style scoped>

</style>