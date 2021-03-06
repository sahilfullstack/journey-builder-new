<template>
    <section class="main container-fluid">
        <div class="row  noscroll">
            <div class="col-sm-12 col-md-8 offset-md-4">
                <img src="/images/project-logo-color.png" alt="project" id="icon">
            </div>
        </div>
        <div class="row section bg-secondary noscroll" v-if="section != null">
            <div class="col-sm-12 col-md-8 offset-md-4">
                <h5 :class="section_class">{{ section.title }}</h5>
            </div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" :style="'width: ' + journeyCompleted + '%'"></div>
        </div>
        <div class="row node-area" :class="!scrolling ? 'noscroll' : ''">
            <aside class="col-md-4 bg-primary text-white d-none d-md-flex sidebar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>{{ journey.tree.name }}</h2>
                            <p>{{ journey.tree.description }}</p>
                        </div>
                    </div>
                </div>
            </aside>
            <section class="col-sm-12 col-md-8 offset-md-4">
                <node 
                    v-for="(node, index) in this.nodes" 
                    :key="index" 
                    :node="node" 
                    v-model="path[index]"
                    @can-next="onCanNext(index)" @cannot-next="onCannotNext(index)"
                    @section-faded-out="onSectionFadedOut">
                </node>
            </section>
        </div>
        <div class="row navigator" v-if="this.nodes[this.on_n - 1] && this.nodes[this.on_n - 1].linker.type != 'terminal'">
            <div class="col-sm-12 col-md-8 offset-md-4 p-0">
                <div class="footer-container">
                     <a class="btn btn-back"  @click="goToPrevious" v-if="this.on_n > 1"><i class="fas fa-angle-double-left fa-2x"></i></a>
                     <a class="btn disabled"  v-if="this.on_n == 1"><i class="fas fa-angle-double-left fa-2x"></i></a>
                     <a class="btn disabled"  v-if="validated[on_n - 1] == false" @click="saveResponse"><i class="fas fa-angle-double-right fa-2x"></i></a>
                     <a class="btn btn-next"  v-if="validated[on_n - 1] == true" @click="saveResponse"><i class="fas fa-angle-double-right fa-2x"></i></a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import smoothscroll from 'smoothscroll-polyfill';
    
    // kick off the polyfill!
    smoothscroll.polyfill();

    export default {
        props: {                
            journeyId: {
                type: Number,
                required: true,
            }
        },
        data() {
            return {
                journey: {
                    tree: {
                        name: '',
                        description: ''
                    }
                },
                scrolling: false,
                nodes: [],
                path: [],
                validated: [],
                on_n: 0,
                section_class: '',
                is_section_shown: false,
                is_section_fading_in: false
            }
        },
        mounted() {
            this.resume();
            this.is_section_shown = this.sectionMustBeShown;
        },
        computed: {
            canNext() {
                return this.validated[this.on_n - 1];
            },
            lastNode() {
                return this.nodes[this.on_n - 1];
            },
            section() {
                if( ! this.lastNode) return '';

                if(this.lastNode.section_question == 1) {
                    this.section_class = 'fadeInUp';
                    setTimeout(() => {
                        this.section_class = '';
                    }, 2000);
                }

                return this.lastNode.section;
            },
            journeyCompleted() {
                let r = 0.9, a = 10;

                var sum = (a * (1 - Math.pow(r, this.on_n))) / (1 - r);

                return sum;
            }
        },
        methods: {
            resume() {
                 axios.get('/api/journeys/'+ this.journeyId)
                     .then((response) => {
                         this.journey = response.data.data;
                     });

                axios.get('/api/journeys/'+ this.journeyId +'/nodes')
                    .then((response) => {
                        response.data.data.forEach(node => {
                            this.path.push(node.response != null ? node.response.response : undefined);
                            this.nodes.push(node);
                            this.validated.push(true);
                            this.on_n += 1;
                        });
                        this.validated[this.validated.length - 1] = false;
                        
                        Vue.nextTick(() => {
                            this.scrolling = true;
                            setTimeout(() => {
                                $('.question')[this.on_n - 1].scrollIntoView({
                                    behavior: 'smooth'
                                });
                                this.scrolling = false;
                            }, 1000);
                        });
                    });
            },
            onCanNext(index) {
                this.validated[index] = true;
            },
            onCannotNext(index) {
                this.validated[index] = false;
            },
            onSectionFadedOut() {
                this.is_section_fading_in = true;
                this.is_section_shown = true;
                
                setTimeout(() => {
                    this.is_section_fading_in = false;
                }, 1000);
            },
            goToPrevious() {
                this.scrolling = true;
                Vue.nextTick(() => {
                    $('.question')[this.on_n - 1].scrollIntoView({
                        behavior: 'smooth'
                    });
                    this.scrolling = false;
                });
                
                this.on_n -= 1;
            },
            saveResponse() {
                axios.post('/api/journeys/'+ this.journeyId +'/nodes/' + this.nodes[this.on_n - 1].id,  {
                    response: this.path[this.on_n - 1]
                })
                    .then((response) => {
                        // if the user goes back and changes the answer,
                        // we will remove the nodes after the current node
                        this.nodes.splice(this.on_n);
                        this.path.splice(this.on_n);
                        this.validated.splice(this.on_n);

                        // adding new one
                        this.nodes.push(response.data);
                        this.path.push(undefined);
                        this.validated.push(false);
                        this.scrolling = true;
                        Vue.nextTick(() => {
                            $('.question')[this.on_n - 1].scrollIntoView({
                                behavior: 'smooth'
                            });
                            this.scrolling = false;
                        });
                        this.on_n += 1;
                    })
                    .catch(function (error) {
                        console.log("error occured");
                        console.log(error);
                    });
            }
        }
    }
</script>

<style scoped>
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