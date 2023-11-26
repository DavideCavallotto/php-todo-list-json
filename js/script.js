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
                console.log(res.data.results)
                this.todoArguments = res.data.results
            })
            
        },
        addTodo() {
            console.log(this.new_argument_user)
            

           const data = {   
                     
            argument: this.new_argument_user,
           

            
        }
        
        axios.post('storage_input.php', data, {
            headers: { 'Content-Type': 'multipart/form-data'}

        })
    }
    
},
mounted () {
    
},
created () {    
    this.fetchData()

    }

}).mount('#app')