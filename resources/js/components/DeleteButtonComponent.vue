<template>
    <div>
        <button type="submit" class="btn btn-danger" v-on:click="showConfirm">Delete / JS</button>
    </div>
</template>

<script>
export default {
    props: ['postId'],

    data() {
        return {
            foo: 'bar hi!'
        }
    },

    methods: {
        showConfirm() {
           if(confirm('Ar tikrai norite trinti?' + this.postId )) {

               axios.delete('/posts/' + this.postId).then(function (response) {
                   console.log(response)

                   window.location = '/posts'
               }).catch(function (error) {
                   console.log(error)
               })
           }
        }
    }
}
</script>

<style>

</style>