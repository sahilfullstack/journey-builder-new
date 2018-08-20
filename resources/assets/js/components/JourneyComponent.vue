<template>
    <section class="main container-fluid">
        <div class="row h-100">
            <aside class="col-md-4 bg-primary d-none d-md-block sidebar">
                <p class="text-white">Some info about the journey.</p>
            </aside>
            <section class="col-sm-12 col-md-8 offset-md-4">
                <node 
                    v-for="(node, index) in this.nodes" 
                    :key="index" 
                    :node="node" 
                    v-model="path[index]"
                    @can-next="onCanNext(index)" @cannot-next="onCannotNext(index)">
                </node>
                <!-- <question--select-many></question--select-many>
                <div class="question">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>What is your name?</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque corrupti voluptatum placeat suscipit molestias, voluptates saepe eligendi mollitia, omnis architecto sint officia provident minima maxime porro praesentium repudiandae pariatur aliquam.</p>
            
                            <div class="answerable">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="first-name">First Name</label>
                                        <input type="text" id="first-name">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" id="last-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="question">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>What is your gender?</h1>
                            
                            <div class="linker">
                                <button class="btn btn-block btn-outline-primary">Male</button>
                                <button class="btn btn-block btn-outline-primary">Female</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
        </div>
        <div class="row navigator">
            <div class="col-sm-12 col-md-8 offset-md-4 p-0">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-back" @click="goToPrevious"><i class="fas fa-chevron-left fa-fw"></i></button>
                    <button type="button" class="btn btn-primary btn-next" :disabled="! validated[on_n - 1]" @click="saveResponse">Next <i class="fas fa-chevron-right fa-fw"></i></button>
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
        data() {
            return {
                nodes: [],
                path: [],
                on_n: 0,
                validated: []
            }
        },
        created() {
            this.on_n = 0;
            this.goToNext();
        },
        computed: {
            canNext() {
                return this.validated[this.on_n - 1];
            }
        },
        methods: {
            onCanNext(index) {
                this.validated[index] = true;
            },
            onCannotNext(index) {
                this.validated[index] = false;
            },
            goToPrevious() {
                Vue.nextTick(() => {
                    $('.question')[this.on_n - 1].scrollIntoView({ 
                        behavior: 'smooth' 
                    });
                });
                
                this.on_n -= 1;
            },
            saveResponse() {
                let self = this;
                
                axios.post('/api/users/1/journeys/1/paths',  {response: this.path[this.on_n - 1]})
                    .then(function (response) {                
                        self.nodes.push(response.data);
                        self.path.push(undefined);
                        self.validated.push(false);
                        Vue.nextTick(() => {
                            $('.question')[self.on_n - 1].scrollIntoView({ 
                                behavior: 'smooth' 
                            });
                        });
                        self.on_n += 1;
                    })
                    .catch(function (error) {
                        console.log("error occured");
                        console.log(error);
                    });
            },
            goToNext() {
                
                let available = [
                    {
                        "id": 4,
                        "tree_id": 2,
                        "identifier": 4,
                        "data": {
                            "body": "",
                            "title": "Which of the following food items you consume in your diet?"
                        },
                        "linker": {
                            "to": 5,
                            "type": "select_many",
                            "maximum": 3,
                            "minimum": 2,
                            "selectables": [
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Vegetables"
                                    },
                                    "operations": []
                                },
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Fruits"
                                    },
                                    "operations": []
                                },
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Meat"
                                    },
                                    "operations": []
                                },
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Egg"
                                    },
                                    "operations": []
                                },
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Dairy Products"
                                    },
                                    "operations": []
                                },
                                {
                                    "to": 5,
                                    "data": {
                                        "text": "Fish"
                                    },
                                    "operations": []
                                }
                            ]
                        }
                    },
                    {
                        "id": 4,
                        "tree_id": 2,
                        "identifier": 4,
                        "data": {
                            "body": "",
                            "title": "Which of the following food items you consume in your diet?"
                        },
                        "linker": {
                            "type": "text",
                            "to": 15
                        }
                    },
                    {
                        "id": 4,
                        "tree_id": 2,
                        "identifier": 4,
                        "data": {
                            "body": "",
                            "title": "Which of the following food items you consume in your diet?"
                        },
                        "linker": {
                            "type": "number",
                            "to": 15
                        }
                    }
                ];

                this.nodes.push(available[1]);
                this.path.push(undefined);
                this.validated.push(false);

                // let self = this;
                // axios.get('/api/users/1/journeys/1/questions/next')
                //     .then(function (response) {
                //         self.nodes.push(response.data);
                //         self.path.push(undefined);
                //         self.validated.push(false);
                //     })
                //     .catch(function (error) {
                //         console.log("error occured");
                //         console.log(error);
                //     });
                
                this.on_n += 1;
            }
        }
    }
</script>

<style scoped>

</style>