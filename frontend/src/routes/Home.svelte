<script>
  import Button from '../components/shared/Button.svelte';
  import ProductCard from '../components/shared/ProductCard.svelte';
  import FiSearch from 'svelte-icons-pack/fi/FiPlus';

  const srcImage = 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fgamespredator.com%2Fwp-content%2Fuploads%2F2020%2F09%2FNvidia-rtx-3090-evga.jpg&f=1&nofb=1'
  const productName = 'ASUS GEFORCE RTX 3090'
  const products = [
    1,
    2,
    3,
    4
  ]
</script>

<svelte:head>
  <title>Home</title>
</svelte:head>
<div>
  {#each products as product }
    <ProductCard image_src={srcImage} name={productName}/>
  {/each}
</div>

<style>
  div {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    padding-block-end: 1rem;
    overflow-x: scroll;
    overflow-y: visible;
  }
</style>