<template>
    <div class="question">
        <div class="row">
            <div class="col-sm-12">
                <h2>{{ this.node.data.title }}</h2>
                <p>{{ this.node.data.body }}</p>

                <div class="answerable">
                    <linker--select-many v-if="this.node.linker.type == 'select_many'" :linker="this.node.linker" v-model="value" v-on="$listeners"></linker--select-many>
                    <linker--select-one v-if="this.node.linker.type == 'select_one'" :linker="this.node.linker" v-model="value" v-on="$listeners"></linker--select-one>
                    <linker--text v-if="this.node.linker.type == 'text'" :linker="this.node.linker" v-model="value" v-on="$listeners"></linker--text>
                    <linker--number v-if="this.node.linker.type == 'number'" :linker="this.node.linker" v-model="value" v-on="$listeners"></linker--number>
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
            // canNext() {
            //     this.$emit('can-next');
            // }
        }
    }
</script>

<style scoped>

</style>