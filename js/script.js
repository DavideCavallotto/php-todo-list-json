const {createApp} = Vue

createApp({
    data() {
        return {
            todoArguments: [],
            new_argument_user: ''
        }
    },
    methods: {
        fetchData() {
            axios.get('./api_server.php').then(res=> {
                console.log(res.data)
                this.todoArguments = res.data
            })
            
        },
        addTodo() {
            console.log(this.new_argument_user)
            this.argument_user= ''

           const data = {            
            arguments: this.new_argument_user
            
        }
        
        axios.post('storage_input.php',data, {
            headers: { 'Content-Type': 'multipart/from-data'}
        })
    }
    
},
mounted () {
    
},
created () {    
    this.fetchData()
    
    }

}).mount('#app')