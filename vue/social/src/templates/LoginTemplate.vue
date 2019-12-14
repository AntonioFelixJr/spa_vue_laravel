<template>

  <span>

    <header>
      <NavBar cor="blue darken-1" url="/" logo="ESCOLA XXIII">
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/login">Entrar</router-link></li>
        <li><router-link to="/cadastro">Cadastre-se</router-link></li>
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
  components: {
    NavBar,
    Footer,
    Grid,
    CardMenu
  }
}
</script>

<style>

</style>
