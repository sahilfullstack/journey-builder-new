<template>
    <div class="question">
      <section class="flow-question">
        <div class="row">
            <div class="col-sm-12">
                <!-- <p class="h5 text-muted">#{{ this.node.section_question }}</p> -->
                <div class="flow-question-header">
                  <div class="flow-question-header-title">
                    {{ this.node.section_question }}. {{ this.node.data.title }}
                  </div>
                </div>
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
                    <linker--months v-if="this.node.linker.type == 'months'" :linker="this.node.linker" v-bind:value="value" v-on="$listeners"></linker--months>
                </div>
            </div>
        </div>
      </section>
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
        created() {
            this.is_section_shown = this.sectionMustBeShown;
        },
        computed: {
            sectionMustBeShown() {
                return (this.node.section_question == 1 && ! this.node.response);
            }
        },
        data() {
            return {
                is_section_shown: false,
                is_section_fading_out: false,
                is_question_fading_in: false
            }
        },
        methods: {
            showQuestion() {
                this.is_section_fading_out = true;
                this.$emit('section-faded-out');
                setTimeout(() => {
                    this.is_section_shown = false;
                    this.is_question_fading_in = true;
                }, 1000);
            }
        }
    }
</script>

<style scoped>
@keyframes fadeOutUp {
  from {
    opacity: 1;
  }

  to {
    opacity: 0;
    transform: translate3d(0, -100%, 0);
  }
}

.fadeOutUp {
  animation-name: fadeOutUp;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
}


@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 100%, 0);
  }

  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

.fadeInUp {
  animation-name: fadeInUp;
  animation-duration: 1s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
}
</style>