<script lang="ts">
import Banner from './Banner.vue';
import ConteudoPrincipal from './ConteudoPrincipal.vue';
import Rodape from './Rodape.vue';

export default {
  components: { Banner, ConteudoPrincipal, Rodape }
}
</script>

<template>
  <Banner />
  <ConteudoPrincipal />
  <Rodape />
</template>
