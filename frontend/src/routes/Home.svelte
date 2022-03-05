<script>
  import Button from '../components/shared/Button.svelte';
  import ProductCard from '../components/shared/ProductCard.svelte';
  import FiSearch from 'svelte-icons-pack/fi/FiPlus';
  import Hamburguer from '../components/shared/Hamburguer.svelte';

  const srcImage = 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fgamespredator.com%2Fwp-content%2Fuploads%2F2020%2F09%2FNvidia-rtx-3090-evga.jpg&f=1&nofb=1'
  const productName = 'ASUS GEFORCE RTX 3090'
</script>

<div>
  <ProductCard image_src={srcImage} name={productName}/>
</div>
<Button IconSvg={FiSearch} on:click={() => console.log('aaa')}>ADD</Button>
<Hamburguer />

<style>
  div {
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>