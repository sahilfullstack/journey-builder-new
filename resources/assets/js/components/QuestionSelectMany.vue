<template>
    <div class="question">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{ this.data.title }}</h1>
                <p>{{ this.data.body }}</p>

                <div class="answerable">
                    <div class="horizontal-scroll">
                        <selectable-card class="text-center" value="1" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>    
                        <selectable-card class="text-center" value="2" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>
                        <selectable-card class="text-center" value="3" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>
                        <selectable-card class="text-center" value="4" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>
                        <selectable-card class="text-center" value="5" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>
                        <selectable-card class="text-center" value="6" @selected="onSelect" @unselected="onUnselect">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </selectable-card>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                data: {
                    title: 'What do you like the most?',
                    body: 'Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah'
                },
                selected: []
            }
        },

        methods: {
            onSelect(value) {
                this.selected.push(value);
            },
            onUnselect(value) {
                let index = this.selected.indexOf(value);
    
                if (index !== -1) this.selected.splice(index, 1);
            }
        }
    }
</script>

<style scoped>

</style>