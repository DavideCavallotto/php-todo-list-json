const {createApp} = Vue

createApp({
    data() {
        return {
            todoArguments: [],
        }
    },
    methods: {
        fetchData() {
            axios.get('./api_server.php').then(res=> {
                console.log(res.data)
                this.todoArguments = res.data
            })
            
        }

    },
    mounted () {

    },
    created () {
        this.fetchData()
    }

}).mount('#app')