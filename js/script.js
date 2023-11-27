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
            if (this.new_argument_user !== '') {

                const data = { 
                    argument: this.new_argument_user,      
                          
                }
     
             axios.post('storage_input.php', data, {
                headers: { 'Content-Type': 'multipart/form-data'}
     
             }).then(res => {
                this.todoArguments = res.data.arguments
                this.new_argument_user = ''
             })

            }
        },
        removeTodo(index) {
            
            const data = { 
                i: index   
                      
            }

            axios.post('remove_argument.php',data, {
                headers: { 'Content-Type': 'multipart/form-data'}
            }).then(res => {
                this.todoArguments = res.data.arguments
                
             })
        },
        checkTodo(index) {  
            console.log('ho cliccato')          
            const data = { 
                i: index   
                      
            }

            axios.post('checked.php',data, {
                headers: { 'Content-Type': 'multipart/form-data'}
            })
            .then(res => {
                this.todoArguments = res.data.arguments
                
             })
        }

    
            
    },
    mounted () {
        
    },
    created () {    
        this.fetchData()

    }

}).mount('#app')
        
    