<template>
    <section class="main container-fluid">
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
                    @can-next="onCanNext(index)" @cannot-next="onCannotNext(index)">
                </node>
                
                <!-- <div class="question container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>What?</h1>
                            <h1>What is your name?</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti voluptatum placeat suscipit molestias, voluptates saepe eligendi mollitia, omnis architecto sint officia provident minima maxime porro praesentium repudiandae pariatur aliquam.</p>
            
                            <div class="answerable">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
        </div>
        <div class="row navigator">
            <div class="col-sm-12 col-md-8 offset-md-4 p-0">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-back" @click="goToPrevious" v-if="this.on_n > 1"><i class="fas fa-chevron-left fa-fw"></i></button>
                    <button type="button" class="btn btn-danger btn-next" :disabled="! validated[on_n - 1]" @click="saveResponse">Next <i class="fas fa-chevron-right fa-fw"></i></button>
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
                on_n: 0
            }
        },
        mounted() {
            this.resume();
        },
        computed: {
            canNext() {
                return this.validated[this.on_n - 1];
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

</style>