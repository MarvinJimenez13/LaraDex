<template>
  <div class="row">
    <spinner v-show="loading"></spinner>
    <div class="col-sm" v-for="pokemon in pokemons">
      <div class="card text-center" style="width: 18rem; margin-top: 50px;">
        <img class="card-img-top rounded-circle mx-auto d-block"  style="height: 100px;
        width:100px; background-color:#EFEFEF; margin:20px;"
         src="images/">
        <div class="card-body">
          <h5 class="card-title">{{pokemon.name}}</h5>
          <p class="card-text">Description</p>
          <a href="/trainers/" class="btn btn-primary">Ver más.</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return{
        pokemons:[],
        loading: true
      }
    },
    mounted(){
      axios.get('http://127.0.0.1:8000/pokemons').then((res) =>{this.pokemons = res.data
      this.loading = false})
    }
  }
</script>
