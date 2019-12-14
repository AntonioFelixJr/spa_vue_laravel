<template>
  <div class="row">
    <Grid tamanho="12" class="input-field">
      <textarea v-model="conteudo" id="conteudo" class="materialize-textarea"></textarea>
      <label for="conteudo">O que está acontecendo?</label>
    </Grid>
    <p>
      <Grid v-if="conteudo" tamanho="2 offset-s10" class="btn waves-effect waves-light">Publicar</Grid>
    </p>
  </div>
</template>

<script>
import Grid from '@/components/layouts/Grid'

export default {
  name: 'InputPost',
  data () {
    return {
      conteudo: ''
    }
  },
  components: {
    Grid
  }
}
</script>

<style>

</style>
