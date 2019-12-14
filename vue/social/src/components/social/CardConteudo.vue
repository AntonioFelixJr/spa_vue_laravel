<template>
  <div class="row">
    <div class="card">

      <div class="card-content">
        <div class="row valign-wrapper">
          <Grid tamanho="1">
            <img :src="perfil" :alt="nome" class="circle responsive-img"> <!-- notice the "circle" class -->
          </Grid>
          <Grid tamanho="11">
            <span class="black-text">
              <strong>{{ nome }}</strong> - <small>{{ data }}</small>
            </span>
          </Grid>
        </div>

        <slot />

      </div>

      <div class="card-action">
        <i class="material-icons">favorite_border</i>
        <i class="material-icons">insert_comment</i>
      </div>

    </div>
  </div>
</template>

<script>
import Grid from '@/components/layouts/Grid'

export default {
  name: 'CardConteudo',
  props: ['cor', 'perfil', 'nome', 'data'],
  components: {
    Grid
  }
}
</script>

<style>

</style>
