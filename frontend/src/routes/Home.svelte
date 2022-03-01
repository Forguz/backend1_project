<script>
  import Button from '../components/shared/Button.svelte';
  import ProductCard from '../components/shared/ProductCard.svelte';

  const srcImage = 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.thefpsreview.com%2Fwp-content%2Fuploads%2F2020%2F08%2Fcolorful-igame-geforce-rtx-2080-ti-kudan.jpg&f=1&nofb=1'
  const productName = 'ASUS GEFORCE RTX 3090'
</script>

<div>
  <ProductCard image={srcImage} name={productName}/>
</div>

<style>
</style>