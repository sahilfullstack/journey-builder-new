<template>
    <div class="question">
        <div class="row">
            <div class="col-sm-12">
                <h2>{{ this.node.data.title }}</h2>
                <p>{{ this.node.data.body }}</p>

                <div class="answerable">
                    <linker--select-many v-if="this.node.linker.type == 'select_multiple'" :linker="this.node.linker" v-model="value" @input="emit"></linker--select-many>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            node: {
                type: Object,
                required: true
            }
        },
        data() {
            return {
                value: undefined
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