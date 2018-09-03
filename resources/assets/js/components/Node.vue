<template>
    <div class="question">
        <div class="row">
            <div class="col-sm-12">
                <p class="h5 text-muted">#{{ this.node.section_question }}</p>
                <h3>{{ this.node.data.title }}</h3>
                <p>{{ this.node.data.body }}</p>

                <div class="answerable">
                    <linker--select-many v-if="this.node.linker.type == 'select_many'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--select-many>
                    <linker--select-one v-if="this.node.linker.type == 'select_one'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--select-one>
                    <linker--text v-if="this.node.linker.type == 'text'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--text>
                    <linker--number v-if="this.node.linker.type == 'number'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--number>
                    <linker--full-name v-if="this.node.linker.type == 'full_name'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--full-name>
                    <linker--date v-if="this.node.linker.type == 'date'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--date>
                    <linker--weight v-if="this.node.linker.type == 'weight'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--weight>
                    <linker--height v-if="this.node.linker.type == 'height'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--height>
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
            },
            value: {
                required: true
            }
        },
        data() {
            return {
                // value: undefined
            }
        }
    }
</script>

<style scoped>

</style>