<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <ul class="mb-0">
                            <input class="form-control" type="text" v-model="newFact">
                            <button class="btn btn-primary" @click="addFact">pridėti</button>
                            <!--<div class="bg-info p-3 text-white">{{ newFact }}</div>-->
                            <li v-for="fact in facts">{{ fact }}</li>
                        </ul>
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
                newFact: '',
                randomFact: 'lorem ipsum',
                facts: []
            }
        },

        methods: {
            addFact () {
                this.facts.push(this.newFact)
                this.newFact = ''
            }
        },

        mounted() {
            axios.get('http://www.randomtext.me/api/').then(function (response) {
                this.facts.push(response.data.text_out)
            })


        }
    }
</script>
