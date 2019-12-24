<template>

  <span>

    <header>
      <NavBar cor="blue darken-1" url="/" logo="ESCOLA XXIII">
        <li><router-link to="/">Home</router-link></li>
        <li v-if="!usuario"><router-link to="/login">Entrar</router-link></li>
        <li v-if="!usuario"><router-link to="/cadastro">Cadastre-se</router-link></li>
        <li v-if="usuario"><router-link to="/perfil">{{usuario.name}}</router-link></li>
        <li v-if="usuario"><a v-on:click="sair()">Sair</a></li>

      </NavBar>
    </header>

    <main>
      <div class="container">
        <div class="row">
          <Grid tamanho="8">
            <CardMenu>
              <slot name="menu-esquerdo" />
            </CardMenu>
          </Grid>
          <Grid tamanho="4">
            <slot name="principal" />
          </Grid>
        </div>
      </div>
    </main>

    <Footer cor="blue darken-1" logo="Social" descricao="Links associados." ano="2020">
      <li><a class="grey-text text-lighten-3" href="#!">HOME 1</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
      <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
    </Footer>

  </span>
</template>

<script>
import NavBar from '@/components/layouts/NavBar'
import Footer from '@/components/layouts/Footer'
import Grid from '@/components/layouts/Grid'
import CardMenu from '@/components/layouts/CardMenu'

export default {
  name: 'LoginTemplate',
  data () {
    return {
      usuario: false
    }
  },
  components: {
    NavBar,
    Footer,
    Grid,
    CardMenu
  },
  created () {
    let usuarioLogado = sessionStorage.getItem('usuario')

    if (usuarioLogado) {
      this.usuario = JSON.parse(usuarioLogado)
      this.$router.push('/')
    }
  },
  methods: {
    sair () {
      sessionStorage.clear()
      this.usuario = false
    }
  }
}
</script>

<style>

</style>
