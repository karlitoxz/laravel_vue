<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Crear Blog</h4>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="crear">
                            <div class="form-group row">
                                <label for="text" class="col-4 col-form-label">Título</label> 
                                <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                    </div> 
                                    <input v-model="blog.titulo" id="text" name="text" type="text" class="form-control" >
                                </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="textarea" class="col-4 col-form-label">Contenido</label> 
                                <div class="col-8">
                                <textarea v-model="blog.contenido" id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"crear-blog",
    data(){
        return{
            blog:{
                titulo:"",
                contenido:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/blog', this.blog)
            .then(response=>{
                this.$router.push({name:"mostrarBlogs"})

            })
            .catch(error=>{
               console.log(error) 
            })
        }
    }
}
</script>