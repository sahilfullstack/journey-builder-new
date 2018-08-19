<template>
    <section class="main container-fluid">
        <div class="row h-100">
            <aside class="col-md-4 bg-primary d-none d-md-block sidebar">
                <p class="text-white">Some info about the journey.</p>
            </aside>
            <section class="col-sm-12 col-md-8 offset-md-4">
                <node v-for="(node, index) in this.nodes" :key="index" :node="node" v-model="path[index]"></node>
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
                    <button type="button" class="btn btn-primary btn-back">Back</button>
                    <button type="button" class="btn btn-primary btn-next" @click="saveResponse">Next</button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                nodes: [],
                path: [],
                on_n: 0
            }
        },
        created() {
            this.on_n = 0;
            this.goToNext();
        },
        methods: {
            saveResponse() {
                    let self = this;
                    console.log(this.path);
                  axios.post('/api/users/1/journeys/1/paths',  {response: this.path[this.on_n - 1]})
                    .then(function (response) {
                        console.log("successfull response submitted");                  
                        self.nodes.push(response.data);
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
                            "maximum": 6,
                            "minimum": 1,
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

                let self = this;
                axios.get('/api/users/1/journeys/1/questions/next')
                    .then(function (response) {
                        self.nodes.push(response.data);
                    })
                    .catch(function (error) {
                        console.log("error occured");
                        console.log(error);
                    });


//                this.nodes.push(available[this.on_n]);
//                this.path.push(undefined);

                this.on_n += 1;
            }
        }
    }
</script>

<style scoped>

</style>