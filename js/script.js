const {createApp} = Vue

createApp({
    data() {
        return {
            todoArguments: [],
        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php')
        }

    },
    mounted () {

    },
    created () {
        this.fetchData()
    }

}).mount('#app')