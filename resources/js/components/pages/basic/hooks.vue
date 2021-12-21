<template>
    <div>
        <h1 ref="myref">Hook Tutorial</h1>
        <h2>My name is: {{ name }}</h2>
    </div>
</template>

<script>
export default {
    data(){
        return{
            name:'Roshan'
        }
    },
    beforeCreate(){
        console.log(this.name);
    },
    created(){
        // call mostly initial data from it ...
        console.log('data and  other function is available but not html');
    },
    mounted(){
        console.log(this.$refs.myref);
    }
}
</script>