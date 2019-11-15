<template>
  <span>
    <header>
      <NavBar cor="blue darken-1" url="https://www.google.com.br" logo="ESCOLA XXIII" />
    </header>

    <main>
      <div class="container">
        <div class="row">

          <Grid tamanho="4">
            Menu
          </Grid>
          <Grid tamanho="8">
            <router-view />
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

export default {
  name: 'App',
  components: {
    NavBar,
    Footer,
    Grid
  }
}
</script>

<style>

</style>
