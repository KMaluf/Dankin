<template>
    <div id="cliente">
        <h2>Cliente, {{ nome }} aqui! </h2>
        <p>{{ descricao }}</p>
        

    </div>
</template>

<script>
export default {
    data(){
        return{
            nome: "Victor Lima",
            numero: "",
            email:"",
            idade: 0,
            descricao:" Lorem ipsum Lorem ipsum"
        }

    }
}
</script>

<style scoped>
    #cliente{
        max-width: 600px;
        height: 120px;
    }


</style>